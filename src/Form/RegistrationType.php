<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    /**
     * Permet d'avoir la configuration de base d'un champ !
     * @param $label
     * @param $placeholder
     * @param $option
     * @return array
     */
    private function getConfiguration($placeholder,  $option = []){
        return array_merge([

                'attr' => [
                    'placeholder' => $placeholder,

                ]

            ], $option
        );

}


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, $this->getConfiguration("votre email "))
            ->add('password',PasswordType::class , $this->getConfiguration("mot de passe") )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
