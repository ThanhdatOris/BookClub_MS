<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Tên',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
            ])
            ->add('studentId', TextType::class, [
                'label' => 'Mã sinh viên',
                'disabled' => true, // Không cho phép chỉnh sửa studentId
            ])
            ->add('classId', TextType::class, [
                'label' => 'Lớp',
                'required' => false,
            ])
            ->add('faculty', TextType::class, [
                'label' => 'Khoa',
                'required' => false,
            ])
            ->add('contactInfo', TextType::class, [
                'label' => 'Thông tin liên hệ',
                'required' => false,
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