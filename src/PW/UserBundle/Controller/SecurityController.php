<?php
// src/PW/UserBundle/Controller/SecurityController.php;

namespace PW\UserBundle\Controller;

use PW\PDO\QueryExecution;
use Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PW\PortfolioBundle\Entity\Training;
use PW\PortfolioBundle\Form\TrainingType;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class SecurityController extends Controller
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = new QueryExecution();
    }

    public function loginAction(Request $request)
    {

        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('oc_platform_accueil');
        }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('PWUserBundle:connexion:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
        /*/*entity:
        class:    PW\UserBundle\Entity\User
                property: pseudo
        $pseudo = $request->query->get('form-pseudo');
        $password = $request->query->get('form-password');
        $param =array(
            $pseudo,
            $password
        );
        $em = $this->getDoctrine()->getManager()
                                  ->getConnection();
        $query = $em->prepare($this->pdo->getProcedureString('connection',$param));
        $query->execute($param);
        $result = $query->fetch();
        if($result['Pseudo']==$pseudo AND $result['UserPassword']==$password){
            return $this->render('PWUserBundle:Profile:profile.html.twig');
        }
        else{
            $authenticationUtils = $this->get('security.authentication_utils');

            return $this->render('PWUserBundle:connexion:login.html.twig', array(
                'last_username' => $authenticationUtils->getLastUsername(),
                'error'         => $authenticationUtils->getLastAuthenticationError(),
            ));
        }*/

    }
       public function registerAction(Request $request){


        $lastName = $request->request->get('form-first-name');
        $firstName = $request->request->get('form-last-name');
        $email = $request->request->get('form-email');
        $cellphone = $request->request->get('form-cellphone');
        $pseudo = $request->request->get('form-pseudo');
        $password = $request->request->get('form-password');

        $param =array(
            $request->request->get('form-first-name'),
            $request->request->get('form-last-name'),
            $request->request->get('form-email'),
            $request->request->get('form-cellphone'),
            $request->request->get('form-pseudo'),
            $request->request->get('form-password')
        );
        $em = $this->getDoctrine()->getManager()
                                  ->getConnection();
        $query = $em->prepare($this->pdo->getProcedureString('registering',$param));
        $query->execute($param);
        return new Response("lastname:".$lastName." firstname ".$firstName." email :".$email." cellphone :".$cellphone." pseudo :".$pseudo." password :".$password);
    }
    public function indexAction()
    {
        return $this->render('PWUserBundle:profile:profile.html.twig');
    }

    public function profileAction()
{
    return $this->render('PWUserBundle:Profile:profile.html.twig');
}
    public function catalogueAction()
    {
        if (!$this->get('security.context')->isGranted('ROLE_AUTEUR')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedException('Accès limité aux auteurs.');
        }
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

    public function connexionAction(Request $request)
    {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('oc_platform_accueil');
        }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('PWUserBundle:connexion:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
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