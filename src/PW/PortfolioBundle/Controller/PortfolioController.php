<?php

namespace PW\PortfolioBundle\Controller;

use PW\PortfolioBundle\Entity\Training;
use PW\PortfolioBundle\Form\TrainingType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PortfolioController extends Controller
{
    public function testAction(Request $request)
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

    public function indexAction()
    {
        return $this->render('PWPortfolioBundle:Home:editHome.html.twig');
    }
    public function informationAction()
    {
        return $this->render('PWPortfolioBundle:Information:information.html.twig');
    }
    public function introductionAction()
    {
        return $this->render('PWPortfolioBundle:Introduction:introduction.html.twig');
    }
    public function ergonomyAction()
    {
        return $this->render('PWPortfolioBundle:Ergonomie:ergonomie.html.twig');
    }
}