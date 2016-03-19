<?php

namespace PW\PortfolioBundle\Controller;

use PW\PortfolioBundle\Entity\Address;
use PW\PortfolioBundle\Form\AddressType;
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

    public function indexAction(Request $request)
    {
        $address = new Training();
        $form = $this->get('form.factory')->create(new TrainingType(),$address);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($address);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('pw_user_test'));
        }
        return $this->render('PWPortfolioBundle:Forms:training.html.twig',array(
            'form'=>$form->createView(),
        ));
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
/*<div class="well">
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

    {{ form_errors(form) }}

    <div class="form-group">
        {{ form_label(form.nameTraining, "Nom de la formation", {'label_attr':{'classe': 'col-sm-3 control-label'}}) }}
        {{ form_errors(form.nameTraining) }}
        <div class="col-sm-4">
            {{ form_widget(form.nameTraining, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
<div class="form-group">
        {{ form_label(form.qualification, "qualification", {'label_attr':{'classe': 'col-sm-3 control-label'}}) }}
        {{ form_errors(form.qualification) }}
        <div class="col-sm-4">
            {{ form_widget(form.qualification, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>

    {{ form_widget(form.validate, {'attr': {'class': 'btn btn-primary'}}) }}
    {{ form_rest(form) }}
    {{ form_end(form) }}
</div>
*/
