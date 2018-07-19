<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom',null,array(
            "label"=>"form.label.nom",
            'required'=>true
        ))
        ->add('prenom',null,array(
            "label"=>"form.label.prenom",
            'required'=>true
        ))
        ->add('adresse',null,array(
            "label"=>"form.label.adresse",
            'required'=>true
        ))
        ->add('email',null,array(
            "label"=>"form.label.email",
            'required'=>true
        ))
        ->add('telephone',null,array(
            "label"=>"form.label.telephone",
            'required'=>true
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backofficebundle_client';
    }


}
