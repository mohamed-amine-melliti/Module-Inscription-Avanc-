<?php

namespace App\Form;

use App\Entity\CoGerant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoGerantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomCogerant' ,  TextType::class , [
                    'label' => 'Nom co-gérant',
                'empty_data' => ''
            ] )
            ->add('prenomCogerant' ,  TextType::class , [
                'label' => 'Prénom co-gérant',
                'empty_data' => ''
            ]   )
            ->add('participation' , TextType::class , [
                'label' => '% Capital',
                'empty_data' => ''
            ]  )

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CoGerant::class,
        ]);
    }
}
