<?php

namespace InventarioBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProveedoresType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('razonSocial',TextType::class,[
                    'attr' => [
                        'class' => 'form-control border-input'
                    ]
                ])
                ->add('direccion',TextType::class,[
                    'attr' => [
                        'class' => 'form-control border-input'

                ]])
                ->add('rfc',TextType::class,[
                    'attr' => [
                        'class' => 'form-control border-input',
                        'max_length' => 13
                    ]
                ])
                ->add('telefono',TextType::class,[
                    'attr' => [
                        'class' => 'form-control border-input',
                        'max_length' => 10
                    ]
                ])
                ->add('mail',EmailType::class,[
                    'attr' => [
                        'class' => 'form-control border-input'
                    ]
                ])
                ->add('contacto', TextType::class,[
                    'attr' => [
                        'class' => 'form-control border-input'
                    ]
                ])
                ->add('save', SubmitType::class, [
                    'attr' => [
                        'class' => 'btn btn-default border-input'
                    ]
                ])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'InventarioBundle\Entity\Proveedores'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'inventariobundle_proveedores';
    }


}
