<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 7/06/17
 * Time: 10:42 AM
 */

namespace InventarioBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class CSVType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add('subir',FileType::class,[
                'attr' => [
                    'class' => 'form-control'
                ]
            ])

            ->add('save',SubmitType::class,[
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;
    }

}