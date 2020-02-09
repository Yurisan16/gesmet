<?php

namespace AppBundle\Form;

use AppBundle\Entity\Area;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MoveProdType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('typemove', ChoiceType::class, array(
            'choices' => [
                'Entrada' => 'Entrada', 
                'Salida' => 'Salida'], 
            'placeholder' => 'Seleccione'))
        ->add('reason')
        ->add('movedate', DateType::class, array(
            'widget' => 'single_text'
        ))
        ->add('amount')
        ->add('description')
        ->add('destination', EntityType::class, [
            'class' => Area::class,
            'choice_label' => 'areaname',
            'placeholder' => 'Seleccione el área'
        ]);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MoveProd'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_moveprod';
    }


}