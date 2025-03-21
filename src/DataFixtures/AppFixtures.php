<?php

namespace App\DataFixtures;

use App\Entity\Activities;
use App\Entity\Funds;
use App\Entity\Proposals;
use App\Entity\Attendances;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        // Tạo 3 user cố định
        $admin = new Users();
        $admin->setEmail('ngthdat.dev@gmail.com');
        $admin->setPassword($this->passwordHasher->hashPassword($admin, '123456'));
        $admin->setName('Nguyễn Thành Đạt');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setStudentId('HTTT2211003'); // Giả định mã sinh viên
        $admin->setStatus('active');
        $admin->setClassId('HTTT2211');
        $admin->setFaculty('Công nghệ Thông tin');
        $admin->setContactInfo('Phone: 0123456789, Address: 123 Đường Láng, Đống Đa, Hà Nội');
        $admin->setCreateAt(new \DateTime());
        $admin->setUpdateAt(new \DateTime());
        $admin->setGoogleId('google_id_admin_000');
        $manager->persist($admin);

        $treasurer = new Users();
        $treasurer->setEmail('ntdathttt2211003@student.ctuet.edu.vn');
        $treasurer->setPassword($this->passwordHasher->hashPassword($treasurer, '123456'));
        $treasurer->setName('Mai Thị Mỹ Tiên');
        $treasurer->setRoles(['ROLE_TREASURER']);
        $treasurer->setStudentId('CNTP2211061');
        $treasurer->setStatus('active');
        $treasurer->setClassId('CNTP2211');
        $treasurer->setFaculty('Công nghệ Thực phẩm');
        $treasurer->setContactInfo('Phone: 0987654321, Address: 456 Nguyễn Trãi, Thanh Xuân, Hà Nội');
        $treasurer->setCreateAt(new \DateTime());
        $treasurer->setUpdateAt(new \DateTime());
        $treasurer->setGoogleId('google_id_treasurer_001');
        $manager->persist($treasurer);

        $member = new Users();
        $member->setEmail('nguyenthanhdat.st@gmail.com');
        $member->setPassword($this->passwordHasher->hashPassword($member, '123456'));
        $member->setName('Nguyễn Trần Anh Khoa');
        $member->setRoles(['ROLE_USER']);
        $member->setStudentId('HTTT2211026'); // Giả định mã sinh viên
        $member->setStatus('active');
        $member->setClassId('HTTT2211');
        $member->setFaculty('Hệ thống thông tin');
        $member->setContactInfo('Phone: 0912345678, Address: 789 Lê Lợi, TP.HCM');
        $member->setCreateAt(new \DateTime());
        $member->setUpdateAt(new \DateTime());
        $member->setGoogleId('google_id_member_002');
        $manager->persist($member);

        $users = [$admin, $treasurer, $member];

        $userss = [];
        for ($i = 0; $i < 48; $i++) {
            $user = new Users();
            $user->setEmail($faker->unique()->email());
            $user->setPassword($this->passwordHasher->hashPassword($user, '123456'));
            $user->setName($faker->name());
            $user->setRoles(['ROLE_USER']);
            $user->setStudentId('STU' . $faker->unique()->numberBetween(1000, 9999));
            $user->setStatus($faker->randomElement(['active', 'inactive']));
            $user->setClassId('CLASS' . $faker->numberBetween(1, 5));
            $user->setFaculty($faker->randomElement(['CNTT', 'KT-QLNC', 'KHXH']));
            $user->setContactInfo('Phone: ' . $faker->phoneNumber() . ', Address: ' . $faker->address());
            $user->setCreateAt(new \DateTime());
            $user->setUpdateAt(new \DateTime());
            $user->setGoogleId('google_id_' . $faker->uuid());
            $users[] = $user;
            $manager->persist($user);
            $userss[] = $user;
        }

        // Tạo Activities (5-7 record cho mỗi user cố định, bằng tiếng Việt)
        $activities = [];
        $activitySamples = [
            ['title' => 'Hội thảo Công nghệ 2025', 'desc' => 'Thảo luận về xu hướng công nghệ mới.'],
            ['title' => 'Ngày hội Sinh viên', 'desc' => 'Hoạt động giao lưu giữa các lớp.'],
            ['title' => 'Workshop Lập trình', 'desc' => 'Học kỹ năng lập trình thực tế.'],
            ['title' => 'Giải bóng đá Sinh viên', 'desc' => 'Thi đấu bóng đá giữa các khoa.'],
            ['title' => 'Hội nghị Khoa học', 'desc' => 'Trình bày nghiên cứu khoa học.'],
            ['title' => 'Ngày môi trường', 'desc' => 'Dọn dẹp và bảo vệ môi trường campus.'],
            ['title' => 'Tập huấn Kỹ năng', 'desc' => 'Đào tạo kỹ năng mềm cho sinh viên.']
        ];

        foreach ($users as $user) {
            foreach ($activitySamples as $sample) {
                $activity = new Activities();
                $activity->setCreatedBy($user);
                $activity->setTitle($sample['title']);
                $activity->setDescription($sample['desc']);
                $activity->setDate($faker->dateTimeThisYear());
                $activity->setTime(\DateTime::createFromFormat('H:i:s', $faker->time('H:i:s')));
                $activity->setLocation($faker->address());
                $activity->setStatus($faker->randomElement(['planned', 'ongoing', 'completed', 'cancelled']));
                $activity->setCreatedAt(new \DateTime());
                $activity->setUpdatedAt(new \DateTime());
                $activities[] = $activity;
                $manager->persist($activity);
            }
        }

        // Tạo Funds (chỉ do TREASURER tạo, 7 record)
        $fundSamples = [
            ['type' => 'income', 'amount' => 500000, 'desc' => 'Thu quỹ lớp tháng 3'],
            ['type' => 'expense', 'amount' => 300000, 'desc' => 'Chi phí tổ chức hội thảo'],
            ['type' => 'income', 'amount' => 1000000, 'desc' => 'Tài trợ từ khoa'],
            ['type' => 'expense', 'amount' => 200000, 'desc' => 'Mua dụng cụ học tập'],
            ['type' => 'income', 'amount' => 750000, 'desc' => 'Thu phí hoạt động'],
            ['type' => 'expense', 'amount' => 400000, 'desc' => 'Chi phí thuê địa điểm'],
            ['type' => 'income', 'amount' => 600000, 'desc' => 'Đóng góp từ sinh viên'],
            ['type' => 'expense', 'amount' => 250000, 'desc' => 'Chi phí in ấn tài liệu'],
            ['type' => 'income', 'amount' => 800000, 'desc' => 'Thu từ bán vé sự kiện'],
            ['type' => 'expense', 'amount' => 150000, 'desc' => 'Chi phí nước uống cho sự kiện'],
            ['type' => 'income', 'amount' => 1200000, 'desc' => 'Tài trợ từ doanh nghiệp'],
            ['type' => 'expense', 'amount' => 500000, 'desc' => 'Chi phí thuê thiết bị âm thanh'],
            ['type' => 'income', 'amount' => 900000, 'desc' => 'Thu từ bán đồ ăn nhanh'],
            ['type' => 'expense', 'amount' => 350000, 'desc' => 'Chi phí mua quà tặng cho khách mời'],
            ['type' => 'income', 'amount' => 1100000, 'desc' => 'Thu từ bán áo lớp'],
            ['type' => 'expense', 'amount' => 600000, 'desc' => 'Chi phí tổ chức ngày hội'],
            ['type' => 'income', 'amount' => 950000, 'desc' => 'Tài trợ từ trường'],
            ['type' => 'expense', 'amount' => 450000, 'desc' => 'Chi phí mua quà tặng cho giảng viên'],
            ['type' => 'income', 'amount' => 1300000, 'desc' => 'Thu từ bán sách tình nguyện'],
            ['type' => 'expense', 'amount' => 700000, 'desc' => 'Chi phí tổ chức buổi giao lưu'],
            ['type' => 'income', 'amount' => 1400000, 'desc' => 'Tài trợ từ học bổng'],
            ['type' => 'expense', 'amount' => 800000, 'desc' => 'Chi phí mua quà tặng cho sinh viên'],
            ['type' => 'income', 'amount' => 1600000, 'desc' => 'Thu từ bán vé xem phim'],
            ['type' => 'expense', 'amount' => 900000, 'desc' => 'Chi phí tổ chức hội thảo'],
            ['type' => 'income', 'amount' => 1800000, 'desc' => 'Tài trợ từ cựu sinh viên'],
            ['type' => 'expense', 'amount' => 1000000, 'desc' => 'Chi phí mua quà tặng cho cán bộ'],
            ['type' => 'income', 'amount' => 2000000, 'desc' => 'Thu từ bán vé tham quan'],
            ['type' => 'expense', 'amount' => 1100000, 'desc' => 'Chi phí tổ chức ngày hội'],
            ['type' => 'income', 'amount' => 2200000, 'desc' => 'Tài trợ từ công ty'],
            ['type' => 'expense', 'amount' => 1200000, 'desc' => 'Chi phí mua quà tặng cho khách mời'],
            ['type' => 'income', 'amount' => 2400000, 'desc' => 'Thu từ bán vé thể thao'],
            ['type' => 'expense', 'amount' => 1300000, 'desc' => 'Chi phí tổ chức buổi giao lưu'],
            ['type' => 'income', 'amount' => 2600000, 'desc' => 'Tài trợ từ trường'],
            ['type' => 'expense', 'amount' => 1400000, 'desc' => 'Chi phí mua quà tặng cho giảng viên'],
            ['type' => 'income', 'amount' => 2800000, 'desc' => 'Thu từ bán áo lớp'],
            ['type' => 'expense', 'amount' => 1500000, 'desc' => 'Chi phí tổ chức hội thảo'],
            ['type' => 'income', 'amount' => 3000000, 'desc' => 'Tài trợ từ học bổng'],
            ['type' => 'expense', 'amount' => 1600000, 'desc' => 'Chi phí mua quà tặng cho sinh viên'],
            ['type' => 'income', 'amount' => 3200000, 'desc' => 'Thu từ bán sách tình nguyện'],
            ['type' => 'expense', 'amount' => 1700000, 'desc' => 'Chi phí tổ chức buổi giao lưu'],
            ['type' => 'income', 'amount' => 3400000, 'desc' => 'Tài trợ từ cựu sinh viên'],
            ['type' => 'expense', 'amount' => 1800000, 'desc' => 'Chi phí mua quà tặng cho cán bộ'],
            ['type' => 'income', 'amount' => 3600000, 'desc' => 'Thu từ bán vé xem phim'],
            ['type' => 'expense', 'amount' => 1900000, 'desc' => 'Chi phí tổ chức hội thảo'],
            ['type' => 'income', 'amount' => 3800000, 'desc' => 'Tài trợ từ công ty'],
            ['type' => 'expense', 'amount' => 2000000, 'desc' => 'Chi phí mua quà tặng cho khách mời'],
            ['type' => 'income', 'amount' => 4000000, 'desc' => 'Thu từ bán vé tham quan'],
            ['type' => 'expense', 'amount' => 2100000, 'desc' => 'Chi phí tổ chức ngày hội'],
            ['type' => 'income', 'amount' => 4200000, 'desc' => 'Tài trợ từ công ty'],
            ['type' => 'expense', 'amount' => 2200000, 'desc' => 'Chi phí mua quà tặng cho khách mời'],
            ['type' => 'income', 'amount' => 4400000, 'desc' => 'Thu từ bán vé tham quan'],
            ['type' => 'expense', 'amount' => 2300000, 'desc' => 'Chi phí tổ chức ngày hội'],
            ['type' => 'income', 'amount' => 4600000, 'desc' => 'Tài trợ từ công ty'],
            ['type' => 'expense', 'amount' => 2400000, 'desc' => 'Chi phí mua quà tặng cho khách mời'],
            ['type' => 'income', 'amount' => 4800000, 'desc' => 'Thu từ bán vé tham quan'],
            ['type' => 'expense', 'amount' => 2500000, 'desc' => 'Chi phí tổ chức ngày hội'],
            ['type' => 'income', 'amount' => 5000000, 'desc' => 'Tài trợ từ công ty'],
            ['type' => 'expense', 'amount' => 2600000, 'desc' => 'Chi phí mua quà tặng cho khách mời'],
            ['type' => 'income', 'amount' => 5200000, 'desc' => 'Thu từ bán vé tham quan'],
            ['type' => 'expense', 'amount' => 2700000, 'desc' => 'Chi phí tổ chức ngày hội'],
            ['type' => 'income', 'amount' => 5400000, 'desc' => 'Tài trợ từ công ty'],
            ['type' => 'expense', 'amount' => 2800000, 'desc' => 'Chi phí mua quà tặng cho khách mời'],
            ['type' => 'income', 'amount' => 5600000, 'desc' => 'Thu từ bán vé tham quan'],
            ['type' => 'expense', 'amount' => 2900000, 'desc' => 'Chi phí tổ chức ngày hội'],
            ['type' => 'income', 'amount' => 5800000, 'desc' => 'Tài trợ từ công ty'],
            ['type' => 'expense', 'amount' => 3000000, 'desc' => 'Chi phí mua quà tặng cho khách mời'],
            ['type' => 'income', 'amount' => 6000000, 'desc' => 'Thu từ bán vé tham quan'],
            ['type' => 'expense', 'amount' => 3100000, 'desc' => 'Chi phí tổ chức ngày hội'],
            ['type' => 'income', 'amount' => 6200000, 'desc' => 'Tài trợ từ công ty'],
            ['type' => 'expense', 'amount' => 3200000, 'desc' => 'Chi phí mua quà tặng cho khách mời'],
            ['type' => 'income', 'amount' => 6400000, 'desc' => 'Thu từ bán vé tham quan'],
        ];

        foreach ($fundSamples as $sample) {
            $fund = new Funds();
            $fund->setCreatedBy($treasurer); // Chỉ TREASURER tạo
            $fund->setTransactionType($sample['type']);
            $fund->setAmount($sample['amount']);
            $fund->setDate($faker->dateTimeThisYear());
            $fund->setDescription($sample['desc']);
            $createdAt = $faker->dateTimeThisYear();
            $updatedAt = $faker->dateTimeBetween($createdAt, 'now');
            $fund->setCreatedAt($createdAt);
            $fund->setUpdatedAt($updatedAt);
            $manager->persist($fund);
        }

        // Tạo Proposals (5-7 record cho mỗi user cố định)
        $proposalSamples = [
            ['type' => 'event', 'content' => 'Đề xuất tổ chức ngày hội thể thao'],
            ['type' => 'purchase', 'content' => 'Mua máy chiếu cho lớp học'],
            ['type' => 'other', 'content' => 'Tổ chức buổi giao lưu với doanh nghiệp'],
            ['type' => 'event', 'content' => 'Đề xuất hội thảo AI'],
            ['type' => 'purchase', 'content' => 'Mua sách tham khảo cho thư viện'],
            ['type' => 'other', 'content' => 'Tăng cường hoạt động ngoại khóa'],
            ['type' => 'event', 'content' => 'Tổ chức giải chạy marathon']
        ];

        foreach ($userss as $user) {
            foreach ($proposalSamples as $sample) {
                $proposal = new Proposals();
                $proposal->setUserId($user);
                $proposal->setType($sample['type']);
                $proposal->setContent($sample['content']);
                $proposal->setStatus($faker->randomElement(['pending', 'approved', 'rejected']));
                $proposal->setCreatedAt(new \DateTime());
                $proposal->setUpdatedAt(new \DateTime());
                $manager->persist($proposal);
            }
        }

        // Tạo Attendances (5-7 record cho mỗi user cố định)
        foreach ($users as $user) {
            for ($i = 0; $i < 7; $i++) {
                $attendance = new Attendances();
                $attendance->setUserId($user);
                $attendance->setActivityId($faker->randomElement($activities));
                $attendance->setMarkedBy($faker->randomElement($users));
                $attendance->setStatus($faker->randomElement(['present', 'absent', 'late']));
                $attendance->setRemark($faker->sentence());
                $attendance->setMarkedAt(new \DateTime());
                $manager->persist($attendance);
            }
        }

        // Tạo 100 activities (để kiểm tra phân trang)
        $activities = [];
        for ($i = 0; $i < 20; $i++) {
            $activity = new Activities();
            $activity->setCreatedBy($faker->randomElement($userss));
            $activity->setTitle($faker->sentence(3));
            $activity->setDescription($faker->paragraph());
            $activity->setDate($faker->dateTimeThisYear());
            $activity->setTime(\DateTime::createFromFormat('H:i:s', $faker->time('H:i:s')));
            $activity->setLocation($faker->address());
            $activity->setStatus($faker->randomElement(['planned', 'ongoing', 'completed', 'cancelled']));
            $activity->setCreatedAt(new \DateTime());
            $activity->setUpdatedAt(new \DateTime());

            $activities[] = $activity;
            $manager->persist($activity);
        }

        // note: Tạo dữ liệu mẫu cho bảng Proposals
        for ($i = 0; $i < 15; $i++) {
            $proposal = new Proposals();
            $proposal->setUserId($faker->randomElement($users));
            $proposal->setType($faker->randomElement(['event', 'purchase', 'other']));
            $proposal->setContent($faker->paragraph());
            $proposal->setStatus($faker->randomElement(['pending', 'approved', 'rejected']));
            $proposal->setCreatedAt(new \DateTime());
            $proposal->setUpdatedAt(new \DateTime());

            $manager->persist($proposal);
        }
        // end note

        // note: Tạo dữ liệu mẫu cho bảng Attendances
        for ($i = 0; $i < 100; $i++) {
            $attendance = new Attendances();
            $attendance->setUserId($faker->randomElement($userss));
            $attendance->setActivityId($faker->randomElement($activities));
            $attendance->setMarkedBy($faker->randomElement($users));
            $attendance->setStatus($faker->randomElement(['present', 'absent', 'late']));
            $attendance->setRemark($faker->sentence());
            $attendance->setMarkedAt(new \DateTime());

            $manager->persist($attendance);
        }
        // end note

        $manager->flush();
    }
}