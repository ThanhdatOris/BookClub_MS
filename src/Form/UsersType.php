<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('student_id', TextType::class, [
                'label' => 'Mã sinh viên',
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('name', TextType::class, [
                'label' => 'Họ tên',
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('gender', ChoiceType::class, [
                'label' => 'Giới tính',
                'choices' => [
                    'Nam' => 'male',
                    'Nữ' => 'female',
                    'Khác' => 'other'
                ],
                'placeholder' => 'Chọn giới tính',
                'required' => false,
                'attr' => ['class' => 'form-select']
            ])
            ->add('faculty', TextType::class, [
                'label' => 'Khoa',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('class_id', TextType::class, [
                'label' => 'Lớp',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('role', ChoiceType::class, [
                'label' => 'Vai trò',
                'choices' => [
                    'Quản Lý' => 'ROLE_ADMIN',
                    'Thủ Quỹ' => 'ROLE_TREASURER',
                    'Thành Viên' => 'ROLE_MEMBER'
                ],
                'required' => true,
                'attr' => ['class' => 'form-select']
            ])
            ->add('contact_info', TextType::class, [
                'label' => 'Thông tin liên hệ',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}