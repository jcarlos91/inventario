<?php

namespace InventarioBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('producto',TextType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('cantidad', IntegerType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('enStock', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control border-input'
                ]
            ])
            ->add('precioVta', MoneyType::class,[
                'currency' => '' ,
                'attr' => [
                    'class' => 'form-control border-input'
                ],
            ])
            ->add('proveedor',EntityType::class,[
                'attr' => [
                    'class' => 'form-control border-input'
                ],
                'class' => 'InventarioBundle\Entity\Proveedores',
                ]
            )
            ->add('save',SubmitType::class,[
                'attr' => [
                    'class' => 'btn btn-info btn-fill btn-wd'
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
            'data_class' => 'InventarioBundle\Entity\Productos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'inventariobundle_productos';
    }


}
