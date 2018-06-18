<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type',ChoiceType::class,array(
                'choices'=>array(
                    'Soleil' => 'Soleil',
                    'Vue' => 'Vue',
                    'Sport' => 'Sport'
                    ),
                'required' => true,
                'label' => 'Type :',
                'placeholder' => '--- Selectionner Type ----'
            ))
        ->add('genre',ChoiceType::class,array(
                'choices'=>array(
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Mixte' => 'Mixte',
                    'Enfant'=>'Enfant'
                    ),
                'required' => true,
                'label' => 'Genre :',
                'placeholder' => '--- Selectionner Genre ----'
            ))
        ->add('titre',null,array(
            'label'=>"Titre : "
        ))
        ->add('description',null,array(
            'label'=>"Description : "
        ))
        ->add('marque',null,array(
            'label'=>"Marque (Fournisseur) : "
        ))
        ->add('qtt',null,array(
            'label'=>"Qtt : "
        ))
        ->add('prixTtc',null,array(
            'label'=>"Prix (TTC) : "
        ))
        ;

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backofficebundle_produit';
    }


}
