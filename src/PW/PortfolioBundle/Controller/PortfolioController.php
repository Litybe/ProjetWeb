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

    public function apercuAction()
    {
        return $this->render('PWPortfolioBundle:EPortfolio:Apercu.html.twig');
    }



    public function trainingAction(Request $request)
    {
        $training = new Training();
        $form = $this->get('form.factory')->create(new TrainingType(), $training);
        $userId = $this->container->get('security.context')->getToken()->getUser()->getId();
        if ($form->handleRequest($request)->isValid()){
                $paramTraining = array(
                    $training->getTrainingName(),
                    $training->getTrainingDiploma(),
                    $training->getTrainingDescriptive(),
                    $training->getTrainingDate(),
                    $training->getTrainingAddress(),
                    $training->getTrainingZipCode(),
                    $training->getTrainingCity(),
                    $userId
                );
                $this->setQuery('PS_INSERT_TRAINING', $paramTraining);
            }


        return $this->render('PWPortfolioBundle:Information:Competence.html.twig',array('form'=>$form->createView()));
    }
    public function experienceAction(Request $request)
    {
        $experience = new Experience();
        $formExperience = $this->get('form.factory')->create(new ExperienceType(), $experience);
        $userId = $this->container->get('security.context')->getToken()->getUser()->getId();
        if ($formExperience->handleRequest($request)->isValid()) {
                $paramExperience = array(
                    $experience->getExperienceJob(),
                    $experience->getExperienceCompagny(),
                    $experience->getExperienceDetail(),
                    $userId
                );
                $this->setQuery('PS_INSERT_EXPERIENCE', $paramExperience);
            }

        return $this->render('PWPortfolioBundle:Information:Experience.html.twig',array('formExperience'=>$formExperience->createView()));
    }
    public function projetAction(Request $request)
    {
        $project = new Project();
        $formProject = $this->get('form.factory')->create(new ProjectType(), $project);
        $userId = $this->container->get('security.context')->getToken()->getUser()->getId();
        if ($formProject->handleRequest($request)->isValid()) {
                $paramProject = array(
                    $project->getProjectName(),
                    $project->getProjectDescriptive(),
                    $project->getProjectLink(),
                    $userId
                );
                $this->setQuery('PS_INSERT_PROJECT', $paramProject);
            }

        return $this->render('PWPortfolioBundle:Information:Projet.html.twig',array('formProject'=>$formProject->createView()));
    }

}
