<?php
namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastname', TextType::class, [
                'required' => true,
                'label' => 'Nom',
            ])
            ->add('firstname', TextType::class, [
                'required' => true,
                'label' => 'Prénom',
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'label' => 'Email',
            ])
            ->add('phone', TelType::class, [
                'required' => false,
                'label' => 'Téléphone',
            ])
            ->add('objet', ChoiceType::class, [
                'label' => 'Objet',
                'choices' => [
                    'Demande de rendez vous' => 'rdv',
                    'Support technique' => 'support',
                    'Renseignement' => 'info',
                    'Autre' => 'autre',
                ],
            ])
            ->add('message', TextareaType::class, [
                'label' => 'Entrez votre message',
            ])
            ->add('envoyer', SubmitType::class, [
                'label' => 'Envoyer',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class, 
        ]);
    }
}