<?php
/**
 * Created by PhpStorm.
 * User: killian
 * Date: 17/08/17
 * Time: 11:19
 */

namespace KZC\KZCBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('KZCBundle:Contact:index.html.twig');
    }


}