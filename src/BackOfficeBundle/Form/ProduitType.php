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
                'label' => 'form.label.type',
                'placeholder' => 'selectionner.type'
            ))
        ->add('genre',ChoiceType::class,array(
                'choices'=>array(
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Mixte' => 'Mixte',
                    'Enfant'=>'Enfant'
                    ),
                'required' => true,
                'label' => 'form.label.genre',
                'placeholder' => 'selectionner.genre'
            ))
        ->add('titre',null,array(
            'label'=>"form.label.titre"
        ))
        ->add('description',null,array(
            'label'=>"form.label.description"
        ))
        ->add('marque',null,array(
            'label'=>"form.label.marque"
        ))
        ->add('qtt',null,array(
            'label'=>"form.label.qtt"
        ))
        ->add('prixTtc',null,array(
            'label'=>"form.label.prixTtc"
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
