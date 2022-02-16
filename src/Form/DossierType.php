<?php

namespace App\Form;

use App\Entity\CoGerant;
use App\Entity\Dossier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DossierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
//            ->add('nomDossier')
            ->add('raisonSociale' , TextType::class )
            ->add('formeJuridique' , ChoiceType::class , [
                'choices' => [
                    'Association Loi 1901 non lucrative' => 'Association Loi 1901 non lucrative',
                    'Association lucrative' => 'Association lucrative',
                    'SARL' => 'SARL',
                    'EURL' => 'EURL',
                    'SAS' => 'SAS' ,
                    'SASU' => 'SASU' ,
                    'SCI' => 'SCI' ,
                    'SELARL' => 'SELARL',
                    'SELEURL' => 'SELEURL',
                    'SELAS' => 'SELAS' ,
                    'SELASU' => 'SELASU' ,
                    'Entreprise individuelle' => 'Entreprise individuelle',
                    'EIRL' => 'EIRL',
                    'Autoentrepreneur' => 'Autoentrepreneur'





                ]
            ])
            ->add('capitalSocial')
            ->add('nbAssocies' ,  ChoiceType::class , [
                'choices' => [
                    '1' => '1' ,
                    'Plusieurs' => 'Plusieurs'
                ]
                ])
            ->add('adressSiegeSocial' , TextType::class )
            ->add('codePostale' , TextType::class )
            ->add('ville' , TextType::class )
            ->add('numeroTel' , TextType::class )
            ->add('indicatifPaysTel' , TextType::class )
            ->add('adressMail' , TextType::class )
            ->add('siret', TextType::class )
            ->add('franchiseEnBaseTva' , ChoiceType::class , [
        'choices' => [
            'oui' => 'oui' ,
            'non' => 'non'
        ]
    ] )
            ->add('numeroTVAintracommunaitre')
            ->add('typeImposition' , ChoiceType::class , [
                'choices' => [
                    'IR' => 'IR' ,
                    'IS' => 'IS'
                ]
            ])
            ->add('regimeMicro'  , ChoiceType::class , [
                'choices' => [
                    'oui' => 'oui' ,
                    'non' => 'non'
                ]
            ])
            ->add('categorieImposition'  , ChoiceType::class , [
                'choices' => [
                    'Sans' => 'Sans' ,
                    'BIC' => 'BIC' ,
                    'BNC' => 'BNC' ,
                    'BA' => 'BA' ,
                    'Revenus Fonciers' => 'Revenus Fonciers' ,
                    'Micro-BIC' => 'Micro-BIC' ,
                     'Micro-BNC' => 'Micro-BNC' ,
                    'Micro-Ba' => 'Micro-Ba' ,
                    'Micro-Foncier' => 'Micro-Foncier'
                ]
            ])
            ->add('regimeIndependants'  , ChoiceType::class , [
                'choices' => [
                    'oui' => 'oui' ,
                    'non' => 'non'
                ]
            ] )
            ->add('nomGerant')
            ->add('prenomGerant')
//            ->add('coGerant' , EntityType::class , [
//                'class' => CoGerant::class,
//                'required' => false,
//            ])

            ->add('secteurActivite')


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dossier::class,
        ]);
    }
}
