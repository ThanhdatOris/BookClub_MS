<?php

namespace App\Form;

use App\Entity\Proposals;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProposalsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Đề xuất chung' => 'general',
                    'Chỉnh sửa thông tin cá nhân' => 'edit_profile',
                ],
                'label' => 'Loại đề xuất',
                'attr' => ['class' => 'form-select'],
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Nội dung đề xuất',
                'attr' => ['class' => 'form-control', 'rows' => 5],
                'required' => false,
            ])
            ->add('name', TextType::class, [
                'label' => 'Tên mới (nếu có)',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('email', TextType::class, [
                'label' => 'Email mới (nếu có)',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('class_id', TextType::class, [
                'label' => 'Lớp mới (nếu có)',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('faculty', TextType::class, [
                'label' => 'Khoa mới (nếu có)',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('contact_info', TextareaType::class, [
                'label' => 'Thông tin liên hệ mới (nếu có)',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 3],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proposals::class,
        ]);
    }
}