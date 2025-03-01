<?php

namespace App\Form;

use App\Entity\Attendance;
use App\Entity\Activity;
use App\Entity\Member;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttendanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('activity', EntityType::class, [
                'class' => Activity::class,
                'choice_label' => 'title',  // Hiển thị tên hoạt động
                'label' => 'Hoạt động',
                'placeholder' => 'Chọn hoạt động',
                'required' => true,
            ])
            ->add('member', EntityType::class, [
                'class' => Member::class,
                'choice_label' => 'name',  // Hiển thị tên thành viên
                'label' => 'Thành viên',
                'placeholder' => 'Chọn thành viên',
                'required' => true,
            ])
            ->add('checkedIn', CheckboxType::class, [
                'label' => 'Đã điểm danh',
                'required' => false,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Lưu điểm danh',
                'attr' => ['class' => 'btn btn-success mt-3']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Attendance::class,
        ]);
    }
}
