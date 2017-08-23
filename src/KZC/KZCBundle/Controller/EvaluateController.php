<?php
/**
 * Created by PhpStorm.
 * User: killian
 * Date: 17/08/17
 * Time: 11:21
 */

namespace KZC\KZCBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EvaluateController extends Controller
{
    public function indexAction()
    {
        return $this->render('KZCBundle:Evaluate:index.html.twig');
    }
}