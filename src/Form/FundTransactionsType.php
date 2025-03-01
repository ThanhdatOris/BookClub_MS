<?php

namespace App\Form;

use App\Entity\FundTransactions;
use App\Entity\members;
use App\Entity\Users;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FundTransactionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type')
            ->add('amount')
            ->add('description')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('executed_by_id', EntityType::class, [
                'class' => users::class,
                'choice_label' => 'id',
            ])
            ->add('related_member_id', EntityType::class, [
                'class' => members::class,
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
