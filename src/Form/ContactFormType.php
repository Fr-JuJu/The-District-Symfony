<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\IsTrue;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            ->add('nom', TextType::class, [
                'label' => 'nom',
                'required'=> true,
                'attr' => ['id' => 'NomJS', 'id' => 'validationCustom01',
                'class'=>'row g-3 needs-validation', 'class'=>'form-label','class'=>'form-control']
            ])
            ->add('prenom', TextType::class,[
                'label' => 'prenom',
                'required'=> true,
                'attr' => ['id' => 'PrenomJS', 'id' => 'validationCustom02',
                'class'=>'form-label','class'=>'form-control']
            ])

            ->add('email', EmailType::class, [
                'label' => 'email',
                'required'=> true,
                'attr' => ['id' => 'emailJS', 'id' => 'validationCustomUsername',
                'class'=>'form-label','class'=>'form-control'],
            ])

            ->add('telephone', TextType::class,[
                'label' => 'telephone',
                'required'=> true,
                'attr' => [ 
            'class'=>'form-label','class'=>'form-control'],
            ])
            ->add('demande', TextareaType::class,[
                'label' => 'demande',
                'required'=> true,
                'attr' => ['id' => 'votreadresseJS',
                'class'=>'form-label','class'=>'form-control'],
            ])
            ->add('check',  CheckboxType::class,[
                'label' => 'demande',
                'attr' => ['id' => 'invalidCheck',
                'class'=>'form-check-input','class'=>'form-check-label'],
                'mapped'=> false,
                'constraints' =>[
                    new IsTrue([
                        'message' => 'Accepter les termes et conditions'
                    ]),
                ]
            ])
            ->add('btn', SubmitType::class,[
                'label' => 'Envoyer',
                'attr'=>['class' => 'btn btn-dark']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
