<?php

namespace KZC\UsersBundle\Form;

use KZC\UsersBundle\Entity\Users;
use function Sodium\add;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Username', TextType::class)
            ->add('email', TextType::class)
            ->add('FirstName', TextType::class)
            ->add('LastName', TextType::class)
            ->add('Password',PasswordType::class)
            ->add('plainPassword', PasswordType::class)
            ->add('Adress', TextType::class)
            ->add('Ville',TextType::class)
            ->add('Number', IntegerType::class)
            ->add('CP', IntegerType::class)
            ->add('Phone',TextType::class);

    }
    
    /**
     * {@inheritdoc}
     * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'kzc_usersbundle_users';
    }


}
