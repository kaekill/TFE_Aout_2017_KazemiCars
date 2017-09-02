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
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('KZCBundle:Options');
        $em2 = $this->getDoctrine()->getManager();
        $repository2 = $em2->getRepository('KZCBundle:Carburant');
        $options = $repository->findAll();
        $carburant = $repository2->findAll();
        return $this->render('KZCBundle:Evaluate:index.html.twig',array(
            'Option' => $options,
            'carburants' => $carburant,
        ));
    }
}