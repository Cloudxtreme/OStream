<?php

namespace App\Form;

use App\Entity\PreferenceUtilisateurSmartphone;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreferenceUtilisateurSmartphoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('activerModeHorsLigne')
            ->add('resolution')
            ->add('fondEcran')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PreferenceUtilisateurSmartphone::class,
        ]);
    }
}
