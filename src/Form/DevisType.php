<?php

namespace App\Form;

use App\Entity\Devis;
use Dom\Text;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastName',TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'attr' => ['placeholder' => 'Entrez votre nom']
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'attr' => ['placeholder' => 'Entrez votre prénom']
            ])
            ->add('email', TextType::class, [
                'label' => 'Email',
                'required' => true,
                'attr' => ['placeholder' => 'Entrez votre email']
            ])
            ->add('phone', TextType::class, [
                'label' => 'Téléphone',
                'required' => false,
            ])
            ->add('vitrine', TextType::class, [
                'label' => 'Création de site vitrine',
                'required' => false,
               
            ])
            ->add('ecommerce', TextType::class, [
                'label' => 'Création de site e-commerce',
                'required' => false,
               
            ])
            ->add('application', TextType::class, [
                'label' => 'Création d\'application web/mobile',
                'required' => false,
                
            ])
            ->add('webdesign', TextType::class, [
                'label' => 'Création de webdesign',
                'required' => false,
                
            ])
            ->add('seo', TextType::class, [
                'label' => 'Référencement SEO(référencement naturel',
                'required' => false,
               
            ])
            ->add('formation', TextType::class, [
                'label' => 'Formation',
                'required' => false,
                
            ])
            ->add('conseil', TextType::class, [
                'label' => 'Conseil',
                'required' => false,
                
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
        ]);
    }
}
