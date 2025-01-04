<?php

namespace App\Form;

use App\Entity\FundTransactions;
use App\Entity\users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FundTransactionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('amount')
            ->add('fund_descr')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('executed_by', EntityType::class, [
                'class' => users::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FundTransactions::class,
        ]);
    }
}
