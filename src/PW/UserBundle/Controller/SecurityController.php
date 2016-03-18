<?php
// src/PW/UserBundle/Controller/SecurityController.php;

namespace PW\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PW\PortfolioBundle\Entity\Training;
use PW\PortfolioBundle\Form\TrainingType;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('oc_platform_accueil');
        }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('PWUserBundle:Security:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
    public function indexAction()
    {
        return $this->render('PWUserBundle::index.html.twig');
    }

    public function profileAction()
{
    return $this->render('PWUserBundle:Profile:profile.html.twig');
}
    public function catalogueAction()
    {
        $listAdverts = array(
            array('id' => 2, 'titre' => 'EASY PORTFOLIO', 'user' => 'Bobby','description' => 'Bienvenu sur mon ePortFolio'),
            array('id' => 5, 'titre' => 'Medium Portfolio', 'user' => 'Jean Mi', 'description' => 'Jaime les enfant'),
            array('id' => 5, 'titre' => 'Medium Portfolio', 'user' => 'Jean Mi', 'description' => 'Jaime les enfant'),
            array('id' => 5, 'titre' => 'Medium Portfolio', 'user' => 'Jean Mi', 'description' => 'Jaime les enfant'),
            array('id' => 5, 'titre' => 'Medium Portfolio', 'user' => 'Jean Mi', 'description' => 'Jaime les enfant'),
            array('id' => 5, 'titre' => 'Medium Portfolio', 'user' => 'Jean Mi', 'description' => 'Jaime les enfant'),
            array('id' => 5, 'titre' => 'Medium Portfolio', 'user' => 'Jean Mi', 'description' => 'Jaime les enfant'),
            array('id' => 9, 'titre' => 'hard portfolio', 'user' => 'Poney', 'description' => 'WHUUUUhhuuuuu')
        );

        return $this->render('PWUserBundle:Catalogue:catalogue.html.twig', array(
            'listAdverts' => $listAdverts
        ));
    }

    public function connexionAction()
    {
        return $this->render('PWUserBundle:Connexion:connexion.html.twig');
    }

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

        return $this->render('PWUserBundle:test:test.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}