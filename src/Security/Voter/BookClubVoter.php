<?php

namespace App\Security\Voter;

use App\Entity\Activities;
use App\Entity\Users;
use App\Entity\Funds;
use App\Entity\Attendances;
use App\Entity\ActivityParticipants;
use App\Entity\Proposals;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class BookClubVoter extends Voter
{
    protected function supports(string $attribute, $subject): bool
    {
        // Xử lý cả action "EDIT" và "DELETE"
        if (!in_array($attribute, ['EDIT', 'DELETE'])) {
            return false;
        }

        // Kiểm tra xem subject có phải là một trong các entity của chúng ta không
        return $subject instanceof Activities ||
               $subject instanceof Users ||
               $subject instanceof Funds ||
               $subject instanceof Attendances ||
               $subject instanceof ActivityParticipants ||
               $subject instanceof Proposals;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        // Nếu không có user hoặc user không đăng nhập, từ chối quyền
        if (!$user instanceof UserInterface) {
            return false;
        }

        // Lấy role của user
        $userRole = $user->getRole();

        // Xử lý quyền chỉnh sửa/xóa dựa trên entity
        switch (true) {
            // note: Quyền chỉnh sửa/xóa cho bảng Funds
            case $subject instanceof Funds:
                return $userRole === 'Treasurer';
            // end note

            // note: Quyền chỉnh sửa/xóa cho bảng Proposals
            case $subject instanceof Proposals:
                return true; // Tất cả role đều được chỉnh sửa/xóa
            // end note

            // note: Quyền chỉnh sửa/xóa cho các bảng còn lại (Activities, Users, Attendances, ActivityParticipants)
            default:
                return $userRole !== 'member'; // Role member không được chỉnh sửa/xóa
            // end note
        }
    }
}