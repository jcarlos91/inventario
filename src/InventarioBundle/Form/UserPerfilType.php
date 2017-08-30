<?php

namespace InventarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserPerfilType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('apaterno', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('amaterno', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('email', EmailType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('calle', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('numIn', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('numext', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('delegacion', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('municipio', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('cp', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('telefono', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('telcel', TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('sexo', ChoiceType::class,[
                'choices' => [
                    'Masculino' => 'M',
                    'Femenino' => 'F'
                ],
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('estadocivil', ChoiceType::class,[
                'choices' => [
                    'Soltero' => 'SOLTERO',
                    'Casado' => 'CASADO',
                    'Divorciado' => 'DIVORCIADO',
                    'Viudo' => 'VIUDO'
                ],
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('username', TextType::class, [
                'required' => false,
                'mapped' => false,
                'label' => 'Nombre de Usuario',
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('password', PasswordType::class,[
                'required' => false,
                'mapped' => false,
                'label' => 'Contraseña',
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('role',TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('save', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-info btn-fill btn-wd'
                )
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'InventarioBundle\Entity\UserPerfil'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'inventariobundle_userperfil';
    }


}
