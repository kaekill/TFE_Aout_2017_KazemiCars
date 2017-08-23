<?php
/**
 * Created by PhpStorm.
 * User: killian
 * Date: 23/08/17
 * Time: 17:47
 */

namespace KZC\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('FirstName');
        $builder->add('LastName');
        $builder->add('Adress');
        $builder->add('Number');
        $builder->add('CP');
        $builder->add('Phone');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}