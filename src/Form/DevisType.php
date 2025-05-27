<?php

namespace App\Form;

use Dom\Text;
use App\Entity\Devis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

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
         

            // ->add('option', ChoiceType::class, [
            //     'label' => 'Votre projet :',
            //     'choices' => [
            //     'Création de site vitrine' => 'vitrine', 
            //     'Création de site e-commerce' => 'ecommerce',
            //     'Création d\'application web/mobile' => 'application',
            //     'Création de webdesign' => 'webdesign',
            //     'Référencement SEO (référencement naturel)' => 'seo',
            //     'Formation' => 'formation',
            //     'Conseil' => 'conseil',
            //     'Autre' => 'autre',
            //     ],              
        
            //      'expanded' => true,     //  choix checkbox
            //     //  'multiple' => false, 
            //      'required' => true,
    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Devis::class,
        ]);
    }
}
