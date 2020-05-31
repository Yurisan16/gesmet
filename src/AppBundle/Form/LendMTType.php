<?php

namespace AppBundle\Form;

use AppBundle\Entity\Product;
use AppBundle\Entity\Technician;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LendMTType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('lenddate', DateType::class, array(
            'widget' => 'single_text'
        ))
        ->add('received')
        ->add('reason', TextareaType::class)
        ->add('status', ChoiceType::class, array(
            'choices' => [
                'Prestada' => 'Prestada',
                'Devuelta' => 'Devuelta'],
            'placeholder' => 'Seleccione'
        ))
        ->add('product', EntityType::class, [
            'class' => Product::class,
            'choice_label' => 'prodname',
            'placeholder' => 'Selccione el producto'
        ])
        ->add('technician', EntityType::class, [
            'class' => Technician::class,
            'choice_label' => 'technicianname',
            'placeholder' => 'Seleccione el técnico'
        ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\LendMT'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_lendmt';
    }
}
