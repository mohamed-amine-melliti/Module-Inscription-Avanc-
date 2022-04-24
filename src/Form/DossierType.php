<?php

namespace App\Form;

use App\Entity\CoGerant;
use App\Entity\Dossier;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DossierType extends AbstractType
{

    /**
     * Permet d'avoir la configuration de base d'un champ !
     * @param $label
     * @param $placeholder
     * @param $option
     * @return array
     */
    private function getConfiguration(  $placeholder , $option = [])
    {
        return array_merge([

            'attr' => [
                'placeholder' => $placeholder
            ]

        ], $option
        );
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomDossier' , TextType::class)
            ->add('raisonSociale' , TextType::class  )
            ->add('formeJuridique' , ChoiceType::class , [
                'choices' => [
                    ''=> '',
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
            ->add('capitalSocial',TextType::class,  array('label' => ' Capital social indiqué sur votre Kbis ou vos statuts ') )
            ->add('nbAssocies' ,  ChoiceType::class , [
                'choices' => [
                    ''=> '',
                    '1' => '1' ,
                    'Plusieurs' => 'Plusieurs'
                ]
                ])
            ->add('adressSiegeSocial' , TextType::class  , array('label' => 'Adresse du siège social'))
            ->add('codePostale' , NumberType::class , array('label'=> 'Code Postal') , [
                'required'   => true,
            ]
            )


            ->add('ville' , TextType::class , array('label' => 'Ville')  )
            ->add('numeroTel' , TelType::class ,  array('label' => 'Téléphone','attr' => ['onkeyup' => 'Validate(this.id,"integer");']) )

            ->add('adressMail' , TextType::class , array('label' => 'Adresse mail')  )
            ->add('siret', TextType::class ,  array('label' => 'Siret')  )
            ->add('franchiseEnBaseTva' , ChoiceType::class , [
        'choices' => [
            ''=> '',
            'oui' => 'oui' ,
            'non' => 'non'
        ]
    ] )
            ->add('numeroTVAintracommunaitre' , TextType::class ,  array('label' => 'Numéro de TVA intracommunautaire'))
            ->add('typeImposition' , ChoiceType::class , [
                'choices' => [
                    ''=> '',
                    'IR' => 'IR' ,
                    'IS' => 'IS'
                ]
            ])
            ->add('regimeMicro'  , ChoiceType::class , [
                'choices' => [
                    ''=> '',
                    'non' => 'non',
                    'oui' => 'oui'
                ]
            ] , array('label' => 'xxxxxxxxxxx') )
            ->add('categorieImposition'  , ChoiceType::class , [
                'choices' => [
                    ''=> '',
                    'Sans' => 'Sans' ,
                    'BIC' => 'BIC' ,
                    'BNC' => 'BNC' ,
                    'BA' => 'BA' ,
                    'Revenus Fonciers' => 'Revenus Fonciers' ,
                    'Micro-BIC' => 'Micro-BIC' ,
                    'Micro-BNC' => 'Micro-BNC' ,
                    'Micro-BA' => 'Micro-BA' ,
                    'Micro-Foncier' => 'Micro-Foncier'

                ]
            ])
            ->add('regimeIndependants'  , ChoiceType::class , [
                'choices' => [
                    ''=> '',
                    'oui' => 'oui' ,
                    'non' => 'non'
                ]
            ] )
            ->add('nomGerant' , TextType::class  )
            ->add('prenomGerant' ,TextType::class )
//            ->add('coGerant' , EntityType::class , [
//                'class' => CoGerant::class,
//                'required' => false,
//            ])

            ->add('secteurActivite'  , ChoiceType::class , [
                'choices' => [
                    ''=> '',
                    'Café Restauration' => 'Café Restauration' ,
                    'Assurance' => 'Assurance' ,
                    'BTP' => 'BTP' ,
                    'Transport de marchandises' => 'Transport de marchandises' ,
                    'Transport de personnes' => 'Transport de personnes' ,
                    'Commerçant classique' => 'Commerçant classique' ,

                    'Pharmacie' => 'Pharmacie' ,
                    'Garage' => 'Garage' ,
                    'Services' => 'Services' ,
                    'Profession Libérale' => 'Profession Libérale',
                    'Négoce' => 'Négoce' ,
                    'E-commerce' => 'E-commerce' ,
                    'Vente de produits autofabriqués' =>  'Vente de produits autofabriqués',
                    'Agriculture Elevage' => 'Agriculture Elevage' ,
                    'Sport et Solidarité' => 'Sport et Solidarité' ,
                    'Immobilier' => 'Immobilier' ,

                ]
            ])

//            ->add(child: 'capital')->add(child: 'capital')
//            ->add('nomPresident', TextType::class  ,array('label' => 'Nom president'))
//            ->add('prenomPresident', TextType::class  ,array('label' => 'Prenom president'))
//            ->add('capitalPresident', TextType::class  ,array('label' => 'Capital'))
//            ->add('nomEntrepreneur', TextType::class  ,array('label' => 'Nom entrepreneur'))
//            ->add('prenomEntrepreneur', TextType::class  ,array('label' => 'Prenom entrepreneur'))
//            ->add('capitalEntrepreneur', TextType::class  ,array('label' => 'Capital'))


        ;
        $builder->add('capital' , TextType::class );

        $builder->add('coGerant' , CollectionType::class , [
            'entry_type' => CoGerantType::class,
            'entry_options'=> ['label' => false],
            'allow_add' => true,
            'prototype' => true,
            'by_reference' => false,
            'allow_delete' => true,

        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dossier::class,
        ]);
    }
}
