<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // FIXME: Ajouter les champs firstname, lastname, email, birthday

        $builder
<<<<<<< 286f74449066e184e21d9734e85ebb218d3275eb
            ->add('plainPassword', RepeatedType::class, [
                'mapped'         => false,
                'type'           => PasswordType::class,
                'first_options'  => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],
            ]);
=======
            ->add('firstname', TextType::class,  array('label' => 'Firstname'))
            ->add('lastname', TextType::class,  array('label' => 'Lastname'))
            ->add('email', TextType::class,  array('label' => 'Email'))
            ->add('plainPassword', RepeatedType::class,
                array('mapped' => false,
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password')))
            ->add('birthday', DateType::class,  array('label' => 'Birthday'))
            ->add('save', SubmitType::class, array('label' => 'Créer'));
>>>>>>> draft
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        // FIXME: ajouter la configuration du form
    }
}
