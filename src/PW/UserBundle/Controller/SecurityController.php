<?php
// src/PW/UserBundle/Controller/SecurityController.php;

namespace PW\UserBundle\Controller;

use PW\PortfolioBundle\Entity\Skill;
use PW\PortfolioBundle\Form\SkillType;
use PW\PDO\QueryExecution;
use Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
            return $this->redirectToRoute('pw_user_homepage');
        }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('PWUserBundle:connexion:connexion.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
       public function registerAction(Request $request){

        $param =array(
            $request->request->get('form-first-name'),
            $request->request->get('form-last-name'),
            $request->request->get('form-email'),
            $request->request->get('form-cellphone'),
            $request->request->get('form-pseudo'),
            $request->request->get('form-password'),
            'a:1:{i:0;s:9:"ROLE_USER";}'
        );
        $em = $this->getDoctrine()->getManager()
                                  ->getConnection();
        $query = $em->prepare($this->pdo->getProcedureString('registering',$param));
        $query->execute($param);
           $authenticationUtils = $this->get('security.authentication_utils');

           return $this->render('PWUserBundle:connexion:connexion.html.twig', array(
               'last_username' => $authenticationUtils->getLastUsername(),
               'error'         => $authenticationUtils->getLastAuthenticationError(),
           ));    }
    public function indexAction()
    {
        return $this->render('PWUserBundle:profile:profile.html.twig');
    }

    public function profileAction(Request $request)
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
        $skill = new  Skill();

        $form = $this->createForm(SkillType::class, $skill);
        $em = $this->getDoctrine()->getManager();
        $listSkills = array(
            array('id' => 2, 'nameSkill' => 'PHP', 'skillMastery' => '1'),
            array('id' => 3, 'nameSkill' => 'Javascript', 'skillMastery' => '2'),
            array('id' => 4, 'nameSkill' => 'Jquery', 'skillMastery' => '3'),
            array('id' => 5, 'nameSkill' => 'JB', 'skillMastery' => '5'),
            array('id' => 6, 'nameSkill' => 'Word', 'skillMastery' => '4'),
            array('id' => 7, 'nameSkill' => 'Menuiserie', 'skillMastery' => '1'),
            array('id' => 8, 'nameSkill' => 'Lancé de bigornos', 'skillMastery' => '3'),
            array('id' => 9, 'nameSkill' => 'Trotinette', 'skillMastery' => '3'),
            array('id' => 9, 'nameSkill' => 'Equitation sur licornes', 'skillMastery' => '5')
        );

        if ($form->isValid()) {
            // On l'enregistre notre objet $skill dans la base de données, par exemple
            $em->persist($skill);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Compétence bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('pw_user_test'));
        }



        return $this->render('PWUserBundle:test:test.html.twig', array(
            'form' => $form->createView(),
            'listSkills' => $listSkills
        ));
    }
}