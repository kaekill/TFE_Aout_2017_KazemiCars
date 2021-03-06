<?php
/**
 * Created by PhpStorm.
 * User: killian
 * Date: 17/08/17
 * Time: 11:12
 */

namespace KZC\KZCBundle\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('KZCBundle:Voitures');
        $voitures = $repository->findAll();
        return $this->render('KZCBundle:List_Voitures:index.html.twig',array(
            'Voitures' => $voitures,
        ));
    }
}