<?php

namespace App\Form;

use App\Entity\activities;
use App\Entity\Attendance;
use App\Entity\members;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttendanceType_copy extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('checked_in')
            ->add('check_in_time', null, [
                'widget' => 'single_text',
            ])
            ->add('remarks')
            ->add('activity_id', EntityType::class, [
                'class' => activities::class,
                'choice_label' => 'id',
            ])
            ->add('member_id', EntityType::class, [
                'class' => members::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('checked_by_id', EntityType::class, [
                'class' => users::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Attendance::class,
        ]);
    }
}
