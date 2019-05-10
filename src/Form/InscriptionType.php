<?php

namespace App\Form;

use App\Entity\Utilisateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, ["attr"=> ["class"=>"form-control","name"=>"prenom"],"label"=>"Nom de Famille"])
            ->add('prenom', TextType::class, ["attr"=> ["class"=>"form-control", "name"=>"nomDeFamille"],"label"=>"Prénom"])
            ->add('mail', TextType::class, ["attr"=> ["class"=>"form-control"],"label"=>"Adresse Email"])
            ->add('motDePasse', PasswordType::class, ["attr"=> ["class"=>"form-control"],"label"=>"Mot De Passe"])
            ->add('confirm_motDePasse', PasswordType::class, ["attr"=> ["class"=>"form-control"],"label"=>"Mot De Passe de confirmation"])
            ->add('newsLetters')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateurs::class,
        ]);
    }
}
