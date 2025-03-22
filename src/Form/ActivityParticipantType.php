<?php

namespace App\Form;

use App\Entity\Activities;
use App\Entity\ActivityParticipant;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivityParticipantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('joined_at', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Ngày tham gia',
            ])
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Confirmed' => 'confirmed',
                    'Pending' => 'pending',
                    'Cancelled' => 'cancelled',
                ],
                'label' => 'Trạng thái',
            ])
            ->add('activity_id', EntityType::class, [
                'class' => Activities::class,
                'choice_label' => 'title',
                'label' => 'Hoạt động',
            ])
            ->add('user_id', EntityType::class, [
                'class' => Users::class,
                'choice_label' => 'name',
                'label' => 'Người tham gia',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ActivityParticipant::class,
        ]);
    }
}