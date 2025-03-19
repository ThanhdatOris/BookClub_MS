<?php

namespace App\Form;

use App\Entity\activities;
use App\Entity\Attendances;
use App\Entity\users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttendancesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('status')
            ->add('remark')
            ->add('marked_at', null, [
                'widget' => 'single_text',
            ])
            ->add('user_id', EntityType::class, [
                'class' => users::class,
                'choice_label' => 'id',
            ])
            ->add('activity_id', EntityType::class, [
                'class' => activities::class,
                'choice_label' => 'id',
            ])
            ->add('marked_by', EntityType::class, [
                'class' => users::class,
                'choice_label' => 'id',
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
