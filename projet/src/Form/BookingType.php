<?php

namespace App\Form;

use App\Entity\Taxis;
use App\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('depart')
            ->add('arrivee')
            ->add('dateTime')
            ->add('services', EntityType::class, [
                'class'  => Taxis::class,
                'choice_label' => 'nom',
                'label' => 'Choisissez un service'
            ])
            ->add('adulte')
            ->add('enfant')
            ->add('commander', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
