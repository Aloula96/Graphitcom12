<?php

namespace App\Form;

use App\Entity\SiteVitrine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SiteVitrineTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('companyOrOrganization', TextType::class,
             ['label' => 'Entreprise / Organisation'])
            ->add('activitySector', TextType::class, 
            ['label' => 'Secteur d’activité'])
            ->add('hasWebsite', ChoiceType::class, [
                'label' => 'Avez-vous déjà un site ?',
                'choices' => ['Oui' => true, 'Non' => false],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('websiteUrl', UrlType::class, [
                'label' => 'Si oui, lien URL',
                'required' => false,
            ])
            ->add('hasLogo', ChoiceType::class, [
                'label' => 'Avez-vous un logo?',
                'choices' => ['Oui' => true, 'Non' => false],
                'expanded' => true,
                'multiple' => false,
            ])
            ->add('hasGraphicCharter', ChoiceType::class, [
                'label' => 'Avez-vous une charte graphique?',
                'choices' => ['Oui' => true, 'Non' => false],
                'expanded' => true,
                'multiple' => false,
            ])

            ->add('mockupsDone', TextType::class, [
                'label' => 'Maquettes déjà réalisées ?',
                'required' => false,
            ])
            ->add('estimatedPages', IntegerType::class, [
                'label' => 'Nombre de pages estimé',
                'required' => false,
            ])
            ->add('contentProvided', CheckboxType::class, [
                'label' => 'Contenu fourni ou à créer ?',
                'required' => false,
            ])
            ->add('specificFeatures', TextareaType::class, [
                'label' => 'Fonctionnalités spécifiques (formulaire, carte, newsletter…):',
                'required' => false,
            ])
            ->add('desiredDeadline', TextType::class, [
                'label' => 'Délai souhaité',
                'required' => false,
            ])
            ->add('estimatedBudget', TextType::class, [
                'label' => 'Budget estimé',
                'required' => false,
            ])
            ->add('projectConstraints', TextareaType::class, [
                'label' => 'Contrainte liée au projet',
                'required' => false,
            ])
            ->add('projectDescription', TextareaType::class, [
                'label' => 'Description du projet',
                'required' => false,
            ])
            ->add('additionalInfo', TextareaType::class, [
                'label' => 'Informations complémentaires',
                'required' => false,
            ]);

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SiteVitrine::class,
        ]);
    }
}
