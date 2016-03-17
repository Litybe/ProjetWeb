<?php

namespace PW\PortfolioBundle\Controller;

use PW\PortfolioBundle\Entity\Training;
use PW\PortfolioBundle\Form\TrainingType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TrainingController extends Controller
{
    public function addTrainingAction(Request $request)
    {
        $training = new Training();
        $form = $this->get('form.factory')->create(new TrainingType(), $training);

        return $this->render('PWPortfolioBundle:Forms:training.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
