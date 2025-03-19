<?php

namespace App\Form;

use App\Entity\Activities;
use App\Entity\users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivitiesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('descriptiton')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('time', null, [
                'widget' => 'single_text',
            ])
            ->add('location')
            ->add('status')
            ->add('created_at')
            ->add('updated_at', null, [
                'widget' => 'single_text',
            ])
            ->add('created_by_id', EntityType::class, [
                'class' => users::class,
                'choice_label' => 'id',
            ])
            ->add('created_by', EntityType::class, [
                'class' => users::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activities::class,
        ]);
    }
}
