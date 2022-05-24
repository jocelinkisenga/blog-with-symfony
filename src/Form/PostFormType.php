<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PostFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr'=>array(
                    'class'=>'form-control mb-4 mt-3',
                    'placeholder'=>'entre le titre de ...',
                     ),
                'label'=> false
                ])
            ->add('description', TextareaType::class, [
                'attr'=>array(
                    'class'=>'form-control mb-4',
                    'placeholder'=>'Entrer la description ...'
                    ),
                'label'=> false
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
