<?php

/*
 * This file is part of the Telosys package.
 *
 * Coded by MAILLET Hugues
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CreateClientType.
 */
class CreateClientType extends AbstractType
{
    /**
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('carrierName', Type\TextType::class)
            ->add('carrierFirstName', Type\TextType::class)
            ->add('carrierAddress', Type\TextType::class)
            ->add('carrierPostalCode', Type\TextType::class)
            ->add('carrierTown', Type\TextType::class)
            ->add('carrierNumber', Type\TextType::class);
    }
    
    /**
     *
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => \AppBundle\Entity\Client::class,
            'allow_extra_fields' => true,
            'csrf_protection' => false
        ));
    }
}
