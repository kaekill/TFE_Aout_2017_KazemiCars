<?php
// src/OC/PlatformBundle/Controller/AdvertController.php

namespace KZC\KZCBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('KZCBundle:Voitures');
        $voitures = $repository->findAll();
        return $this->render('KZCBundle:Home:index.html.twig',array(
        'Voitures' => $voitures,
        ));
    }

}
