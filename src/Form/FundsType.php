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
            ])
            ->add('amount', NumberType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Số tiền không được để trống.']),
                    new GreaterThan([
                        'value' => 0,
                        'message' => 'Số tiền phải lớn hơn 0.',
                    ]),
                ],
                'label' => 'Số tiền',
                'attr' => ['step' => '0.001'],
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'constraints' => [
                    new NotBlank(['message' => 'Ngày không được để trống.']),
                ],
                'label' => 'Ngày',
            ])
            ->add('description', TextareaType::class, [
                'required' => false,
                'label' => 'Mô tả',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Funds::class,
        ]);
    }
}