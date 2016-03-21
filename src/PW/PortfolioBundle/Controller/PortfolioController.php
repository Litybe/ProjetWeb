<?php

namespace PW\PortfolioBundle\Controller;

use PW\PortfolioBundle\Entity\Experience;
use PW\PortfolioBundle\Entity\Project;
use PW\PortfolioBundle\Form\ExperienceType;
use PW\PortfolioBundle\Form\ProjectType;
use PW\PortfolioBundle\Form\TrainingType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PW\PortfolioBundle\Entity\Training;

class PortfolioController extends Controller
{
    public function testAction(Request $request)
    {
        $training = new Training();
        $form = $this->get('form.factory')->create(new TrainingType(), $training);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($training);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('pw_user_test'));
        }

        return $this->render('PWPortfolioBundle:Forms:training.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    public function indexAction()
    {

        return $this->render('PWPortfolioBundle:Home:editHome.html.twig');
    }
    public function informationAction(Request $request)
    {
        $training = new Training();
        $project = new Project();
        $experience = new Experience();
        $formProject = $this->get('form.factory')->create(new ProjectType(),$project);
        $formExperience = $this->get('form.factory')->create(new ExperienceType(),$experience);
        $form = $this->get('form.factory')->create(new TrainingType(), $training);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($training);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('pw_user_test'));
        }
        return $this->render('PWPortfolioBundle:Information:information.html.twig', array(
            'form' => $form->createView(),
            'formProject'=> $formProject->createView(),
            'formExperience'=> $formExperience->createView()
        ));
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