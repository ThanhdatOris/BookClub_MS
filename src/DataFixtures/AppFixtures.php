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
        $faker = Factory::create('vi_VN');

        // Tạo 3 user cố định
        $admin = new Users();
        $admin->setEmail('ngthdat.dev@gmail.com');
        $admin->setPassword($this->passwordHasher->hashPassword($admin, '123456'));
        $admin->setName('Nguyễn Thành Đạt');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setStudentId('HTTT2211003');
        $admin->setStatus('active');
        $admin->setClassId('HTTT2211');
        $admin->setFaculty('Công nghệ Thông tin');
        $admin->setContactInfo('Điện thoại: 0123456789, Địa chỉ: 123 Đường Láng, Đống Đa, Hà Nội');
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
        $treasurer->setContactInfo('Điện thoại: 0987654321, Địa chỉ: 456 Nguyễn Trãi, Thanh Xuân, Hà Nội');
        $treasurer->setCreateAt(new \DateTime());
        $treasurer->setUpdateAt(new \DateTime());
        $treasurer->setGoogleId('google_id_treasurer_001');
        $manager->persist($treasurer);

        $member = new Users();
        $member->setEmail('nguyenthanhdat.st@gmail.com');
        $member->setPassword($this->passwordHasher->hashPassword($member, '123456'));
        $member->setName('Nguyễn Trần Anh Khoa');
        $member->setRoles(['ROLE_MEMBER']);
        $member->setStudentId('HTTT2211026');
        $member->setStatus('active');
        $member->setClassId('HTTT2211');
        $member->setFaculty('Hệ thống thông tin');
        $member->setContactInfo('Điện thoại: 0912345678, Địa chỉ: 789 Lê Lợi, TP.HCM');
        $member->setCreateAt(new \DateTime());
        $member->setUpdateAt(new \DateTime());
        $member->setGoogleId('google_id_member_002');
        $manager->persist($member);

        $users = [$admin, $treasurer, $member];

        $classID = [
            "CNCD2211", "CNCD2311", "CNCD2411",
            "CNĐĐ2211", "CNĐĐ2311", "CNĐĐ2411",
            "CNĐT2211", "CNĐT2311", "CNĐT2411",
            "CNSH2211", "CNSH2311", "CNSH2411",
            "CNTP2211", "CNTP2311", "CNTP2411",
            "CNTT2211", "CNTT2311", "CNTT2411",
            "CNXD2211", "CNXD2311", "CNXD2411",
            "CNHH2211", "CNHH2311", "CNHH2411",
            "HTTT2211", "HTTT2311", "HTTT2411",
            "KETO2211", "KETO2311", "KETO2411",
            "KTNL2211", "KTNL2311", "KTNL2411",
            "KTPM2211", "KTPM2311", "KTPM2411",
            "KTHC2211", "KTHC2311", "KTHC2411",
            "KHDL2211", "KHDL2311", "KHDL2411",
            "KHMT2211", "KHMT2311", "KHMT2411",
            "LQCC2211", "LQCC2311", "LQCC2411",
            "LUAT2211", "LUAT2311", "LUAT2411",
            "NGNA2211", "NGNA2311", "NGNA2411",
            "QLCN2211", "QLCN2311", "QLCN2411",
            "QLXD2211", "QLXD2311", "QLXD2411",
            "QTKD2211", "QTKD2311", "QTKD2411",
            "TCNH2211", "TCNH2311", "TCNH2411",
        ];

        $facultyMapping = [
            'Công nghệ thông tin' => ['HTTT', 'CNTT', 'KTPM', 'KHMT', 'KHDL'],
            'Khoa học xã hội' => ['LUAT', 'NGNA'],
            'Công nghệ Sinh - Hóa - Thực Phẩm' => ['CNSH', 'CNTP', 'CNHH', 'KTHC', 'KTNL'],
            'Kinh tế - Quản lý công nghiệp' => ['KETO', 'LQCC', 'QLCN', 'QTKD', 'TCNH'],
            'Kỹ thuật cơ khí' => ['CNCD'],
            'Kỹ thuật xây dựng' => ['CNXD', 'QLXD'],
            'Điện - Điện tử' => ['CNDD', 'CNDT'],
        ];

        $userss = [];
        for ($i = 0; $i < 48; $i++) {
            $user = new Users();
            $user->setPassword($this->passwordHasher->hashPassword($user, '123456'));
            $user->setName($faker->name());
            $user->setRoles(['ROLE_MEMBER']);
            $user->setStatus($faker->randomElement(['active', 'inactive']));
            $user->setClassId($faker->randomElement($classID));
            $user->setStudentId($faker->unique()->regexify($user->getClassId() . '[0-9]{3}'));
            $user->setEmail('user'.$user->getStudentId()."@student.ctuet.edu.vn");
            $classPrefix = substr($user->getClassId(), 0, 4);
            $faculty = 'CTUT';
            foreach ($facultyMapping as $facultyName => $prefixes) {
                if (in_array($classPrefix, $prefixes)) {
                    $faculty = $facultyName;
                    break;
                }
            }
            $user->setFaculty($faculty);
            $user->setContactInfo('Phone: ' . $faker->phoneNumber() . ', Address: ' . $faker->address());
            $createdAt = $faker->dateTimeThisYear();
            $updatedAt = $faker->dateTimeBetween($createdAt, 'now');
            $user->setCreateAt($createdAt);
            $user->setUpdateAt($updatedAt);
            $user->setGoogleId('google_id_' . $faker->uuid());
            $users[] = $user;
            $userss[] = $user;
            $manager->persist($user);
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
                $createdAt = $faker->dateTimeThisYear();
                $updatedAt = $faker->dateTimeBetween($createdAt, 'now');
                $activity->setCreatedAt($createdAt);
                $activity->setUpdatedAt($updatedAt);
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
        ];

        foreach ($fundSamples as $sample) {
            $fund = new Funds();
            $fund->setCreatedBy($treasurer);
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

        // Tạo Proposals (5 record do user $member tạo)
        $proposalSamples = [
            [
                'type' => 'general',
                'content' => 'Đề xuất tổ chức ngày hội thể thao cho sinh viên toàn trường.',
                'status' => 'pending',
                'proposed_changes' => null,
            ],
            [
                'type' => 'general',
                'content' => 'Đề xuất mua thêm sách tham khảo cho thư viện khoa Hệ thống thông tin.',
                'status' => 'pending',
                'proposed_changes' => null,
            ],
            [
                'type' => 'edit_profile',
                'content' => 'Đề xuất chỉnh sửa thông tin cá nhân',
                'status' => 'pending',
                'proposed_changes' => [
                    'name' => 'Nguyễn Trần Anh Khoa (Updated)',
                    'email' => 'khoa.updated@gmail.com',
                    'contact_info' => 'Điện thoại: 0912345678, Địa chỉ: 123 Nguyễn Huệ, TP.HCM',
                ],
            ],
            [
                'type' => 'edit_profile',
                'content' => 'Đề xuất chỉnh sửa thông tin cá nhân',
                'status' => 'pending',
                'proposed_changes' => [
                    'class_id' => 'HTTT2311',
                    'faculty' => 'Công nghệ Thông tin',
                ],
            ],
            [
                'type' => 'general',
                'content' => 'Đề xuất tổ chức hội thảo về AI và Machine Learning.',
                'status' => 'pending',
                'proposed_changes' => null,
            ],
        ];

        foreach ($proposalSamples as $sample) {
            $proposal = new Proposals();
            $proposal->setUserId($member); // Sử dụng $member làm người đề xuất
            $proposal->setType($sample['type']);
            $proposal->setContent($sample['content']);
            $proposal->setStatus($sample['status']);
            $proposal->setProposedChanges($sample['proposed_changes']);
            $createdAt = $faker->dateTimeThisYear();
            $updatedAt = $faker->dateTimeBetween($createdAt, 'now');
            $proposal->setCreatedAt($createdAt);
            $proposal->setUpdatedAt($updatedAt);
            $manager->persist($proposal);
        }

        // Xóa phần tạo Proposals cũ
        // foreach ($userss as $user) {
        //     foreach ($proposalSamples as $sample) {
        //         $proposal = new Proposals();
        //         $proposal->setUserId($user);
        //         $proposal->setType($sample['type']);
        //         $proposal->setContent($sample['content']);
        //         $proposal->setStatus($faker->randomElement(['pending', 'approved', 'rejected']));
        //         $createdAt = $faker->dateTimeThisYear();
        //         $updatedAt = $faker->dateTimeBetween($createdAt, 'now');
        //         $proposal->setCreatedAt($createdAt);
        //         $proposal->setUpdatedAt($updatedAt);
        //         $manager->persist($proposal);
        //     }
        // }

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

        // Xóa phần tạo Proposals mẫu cũ
        // for ($i = 0; $i < 15; $i++) {
        //     $proposal = new Proposals();
        //     $proposal->setUserId($faker->randomElement($users));
        //     $proposal->setType($faker->randomElement(['event', 'purchase', 'other']));
        //     $proposal->setContent($faker->paragraph());
        //     $proposal->setStatus($faker->randomElement(['pending', 'approved', 'rejected']));
        //     $proposal->setCreatedAt(new \DateTime());
        //     $proposal->setUpdatedAt(new \DateTime());
        //     $manager->persist($proposal);
        // }

        // Tạo dữ liệu mẫu cho bảng Attendances
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

        $manager->flush();
    }
}