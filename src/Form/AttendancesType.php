<?php

namespace App\Form;

use App\Entity\Activities;
use App\Entity\Attendances;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttendancesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Có mặt' => 'present',
                    'Vắng mặt' => 'absent',
                    'Đi muộn' => 'late',
                ],
                'label' => 'Trạng thái',
            ])
            ->add('remark', TextareaType::class, [
                'label' => 'Ghi chú',
                'required' => false,
            ])
            ->add('marked_at', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Thời gian điểm danh',
            ])
            ->add('user_id', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'name',
                'label' => 'Người dùng',
            ])
            ->add('activity_id', EntityType::class, [
                'class' => Activities::class,
                'choice_label' => 'title',
                'label' => 'Hoạt động',
            ])
            ->add('marked_by', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'name',
                'label' => 'Người điểm danh',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Attendances::class,
        ]);
    }
}