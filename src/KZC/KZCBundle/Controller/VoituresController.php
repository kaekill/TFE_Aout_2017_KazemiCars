<?php
/**
 * Created by PhpStorm.
 * User: killian
 * Date: 31/08/17
 * Time: 22:19
 */

namespace KZC\KZCBundle\Controller;


use KZC\KZCBundle\Entity\Modele;
use KZC\KZCBundle\Entity\Marques;
use KZC\KZCBundle\Entity\Voitures;
use KZC\KZCBundle\KZCBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class VoituresController extends Controller
{



    public function showAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('KZCBundle:Voitures');
        $voitures = $repository->findAll();

        return $this->render("KZCBundle:Voitures:index.html.twig", array(
            'Voitures' => $voitures,
        ));
    }





    public function getmodeleAction(Request $request, $id){

        if($request->isMethod('GET')){

            $em = $this->getDoctrine()->getManager();
            $list_marque = $em->getRepository('KZCBundle:Marques')->findById($id);
            $select = "<select>";
            foreach($list_marque as $marque){
                $idmodele = $marque->getModele();
                $modele = $em->getRepository('KZCBundle:Modele')->findOneById($idmodele);
                $select.="<option value='".$modele->getId()."'>".$modele->getNom()."</option>";
            }
            $select .= "</select>";
            //return $this->render('edit.html.twig');
            return new JsonResponse("Hello");


        }
    }

}