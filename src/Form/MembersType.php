<?php

namespace App\Form;

use App\Entity\Members;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MembersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullname')
            ->add('student_id')
            ->add('email')
            ->add('phone_num')
            ->add('join_date', null, [
                'widget' => 'single_text',
            ])
            ->add('birth_date', null, [
                'widget' => 'single_text',
            ])
            ->add('Classes')
            ->add('Faculty')
            ->add('user_id', EntityType::class, [
                'class' => users::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Members::class,
        ]);
    }
}
