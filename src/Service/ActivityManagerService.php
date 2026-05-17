<?php

namespace App\Service;

use App\Entity\Activities;
use App\Entity\ActivityParticipant;
use App\Entity\Attendances;
use App\Entity\Users;
use App\Repository\ActivitiesRepository;
use App\Repository\ActivityParticipantRepository;
use App\Repository\AttendancesRepository;
use Doctrine\ORM\EntityManagerInterface;

class ActivityManagerService
{
    private $em;
    private $participantRepository;
    private $attendancesRepository;
    private $activitiesRepository;

    public function __construct(
        EntityManagerInterface $em,
        ActivityParticipantRepository $participantRepository,
        AttendancesRepository $attendancesRepository,
        ActivitiesRepository $activitiesRepository
    ) {
        $this->em = $em;
        $this->participantRepository = $participantRepository;
        $this->attendancesRepository = $attendancesRepository;
        $this->activitiesRepository = $activitiesRepository;
    }

    public function cancelActivity(Activities $activity): void
    {
        $activity->setStatus('cancelled');
        $activity->setUpdatedAt(new \DateTime());
        $this->em->flush();
    }

    public function toggleAttendance(int $activityId, int $userId, string $status, Users $markedBy): string
    {
        if (!in_array($status, ['present', 'absent'])) {
            throw new \InvalidArgumentException('Trạng thái không hợp lệ.');
        }

        $attendance = $this->attendancesRepository->findOneBy(['activity_id' => $activityId, 'user_id' => $userId]);
        
        if (!$attendance) {
            $attendance = new Attendances();
            $attendance->setUserId($this->em->getRepository(Users::class)->find($userId));
            $attendance->setActivityId($this->em->getRepository(Activities::class)->find($activityId));
            $attendance->setMarkedAt(new \DateTime());
            $attendance->setMarkedBy($markedBy);
        }

        $attendance->setStatus($status);
        
        $this->em->persist($attendance);
        $this->em->flush();

        return $status;
    }

    public function joinActivity(Activities $activity, Users $user): void
    {
        if ($activity->getStatus() !== 'planned') {
            throw new \LogicException('Chỉ có thể tham gia hoạt động đang lên kế hoạch.');
        }

        $existingParticipant = $this->participantRepository->findByActivityAndUser($activity->getId(), $user->getId());
        if ($existingParticipant) {
            throw new \LogicException('Bạn đã tham gia hoạt động này.');
        }

        $participant = new ActivityParticipant();
        $participant->setActivityId($activity);
        $participant->setUserId($user);
        $participant->setJoinedAt(new \DateTime());
        $participant->setStatus('confirmed'); 
        
        $this->em->persist($participant);
        $this->em->flush();
    }

    public function getParticipantsWithAttendance(Activities $activity): array
    {
        $participants = $this->participantRepository->findBy(['activityId' => $activity->getId()]);
        
        $data = array_map(function ($participant) {
            $user = $participant->getUserId();
            $attendance = $this->attendancesRepository->findOneBy([
                'activity_id' => $participant->getActivityId()->getId(), 
                'user_id' => $user->getId()
            ]);
            
            return [
                'id' => $user->getId(),
                'studentId' => $user->getStudentId() ?: 'N/A',
                'name' => $user->getName(),
                'attended' => $attendance ? $attendance->getStatus() === 'present' : false,
            ];
        }, $participants);

        $totalAttended = count($this->attendancesRepository->findBy([
            'activity_id' => $activity->getId(), 
            'status' => 'present'
        ]));

        return [
            'participants' => $data,
            'totalParticipants' => count($participants),
            'totalAttended' => $totalAttended
        ];
    }
}
