<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SortieProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('produit',null,array(
            'required'=>true,
            'label'=>'Produit :'
        ))
        ->add('qtt',null,array(
            'required'=>true,
            'label'=>'Qtt :'
        ))
        /*->add('prixVente',null,array(
            'required'=>true,
            'label'=>'Prix vente :'
        ))*/
        ->add('dateSortie', DateType::class, [
                'widget' => 'single_text',
                'label'=>'Date Entree : '

            ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\SortieProduit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backofficebundle_sortieproduit';
    }


}
