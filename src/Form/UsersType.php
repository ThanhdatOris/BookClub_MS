<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('student_id')
            ->add('password')
            ->add('name')
            ->add('email')
            ->add('role')
            ->add('status')
            ->add('class_id')
            ->add('faculty')
            ->add('contact_info')
            ->add('created_at', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => false,
                'mapped' => false,
            ])
            ->add('updated_at', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => false,
                'mapped' => false,
                
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
