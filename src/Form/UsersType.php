<?php

namespace App\Form;

use App\Entity\Members;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username')
            ->add('password')
            ->add('role')
            ->add('email')
            ->add('created_at', null, [
                'widget' => 'single_text',
            ])
            ->add('update_at', null, [
                'widget' => 'single_text',
            ])
            ->add('is_active')
            ->add('name', EntityType::class, [
                'class' => Members::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
