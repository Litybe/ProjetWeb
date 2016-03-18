<?php

namespace PW\UserBundle\Controller;

use PW\PortfolioBundle\Entity\Training;
use PW\PortfolioBundle\Form\TrainingType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PortfolioController extends Controller
{
    public function indexAction(Request $request)
    {
        $training = new Training();
        $form = $this->get('form.factory')->create(new TrainingType(), $training);

        if($form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($training);
            $em->flush();

            $request->getSession()->getFlashBag->add('notice', 'Training added');
        }
        return $this->render('PWPortfolioBundle:Forms:training.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}