<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class EntreeProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('produit',null,array(
            'required'=>true,
            'label'=>'form.label.produit'
        ))
        ->add('qtt',null,array(
            'required'=>true,
            'label'=>'form.label.qtt'
        ))
        /*->add('prixEntree',null,array(
            'required'=>true,
            'label'=>'Prix Entree :'
        ))*/
        ->add('dateEntree', DateType::class, [
                'widget' => 'single_text',
                'label'=>'form.label.dateEntree'

            ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\EntreeProduit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backofficebundle_entreeproduit';
    }


}
