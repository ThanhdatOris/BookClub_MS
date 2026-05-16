<?php

namespace App\Form;

use App\Entity\Funds;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;

class FundsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('transaction_type', ChoiceType::class, [
                'choices' => [
                    'Thu' => 'income',
                    'Chi' => 'expense',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Loại giao dịch không được để trống.']),
                ],
                'label' => 'Loại giao dịch',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Chọn loại giao dịch'
                ],
            ])
            ->add('amount', NumberType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Số tiền không được để trống.']),
                    new GreaterThan([
                        'value' => 0,
                        'message' => 'Số tiền phải lớn hơn 0.',
                    ]),
                    new LessThanOrEqual([
                        'value' => 1000000000,
                        'message' => 'Số tiền không được lớn hơn 1 tỷ.',
                    ]),
                ],
                'label' => 'Số tiền',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nhập số tiền',
                    'min' => 0,
                    'max' => 1000000000,
                    'step' => 1000
                ],
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'constraints' => [
                    new NotBlank(['message' => 'Ngày không được để trống.']),
                    new LessThanOrEqual([
                        'value' => 'today',
                        'message' => 'Ngày không được lớn hơn ngày hiện tại.',
                    ]),
                ],
                'label' => 'Ngày',
                'attr' => [
                    'class' => 'form-control',
                    'max' => (new \DateTime())->format('Y-m-d')
                ],
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new Length([
                        'max' => 1000,
                        'maxMessage' => 'Mô tả không được dài quá {{ limit }} ký tự.',
                    ]),
                ],
                'label' => 'Mô tả',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nhập mô tả cho giao dịch này',
                    'rows' => 3
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Funds::class,
            'attr' => [
                'class' => 'needs-validation',
                'novalidate' => true,
            ],
        ]);
    }
}