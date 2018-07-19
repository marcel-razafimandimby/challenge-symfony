<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LigneCommandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('commande',null,array(
            'label'=>'form.label.numCommande'
        ))
        ->add('produit',null,array(
            'label'=>'form.label.produit'
        ))
        ->add('qtt',null,array(
            'label'=>'form.label.qtt'
        ))
        ->add('prixVente',null,array(
            'label'=>'form.label.prixVente'
        ));
        
        
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\LigneCommande'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backofficebundle_lignecommande';
    }


}
