<?php

namespace App\Form;

use App\Entity\Excercice;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExcerciceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateOuverture' , TextType::class , array('label' => 'Date ouverture de l exercice'))
            ->add('dateCloture',TextType::class , array('label' => 'Date clôture de l exercice'))
            // ->add('nomExcercice')
            ->add('regimeTVA' , TextType::class , array('label' => 'Régime de TVA de l exercice'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Excercice::class,
        ]);
    }
}
