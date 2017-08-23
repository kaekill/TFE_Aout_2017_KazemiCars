<?php
// src/OC/PlatformBundle/Controller/AdvertController.php

namespace KZC\KZCBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('KZCBundle:Home:index.html.twig');
    }
}
