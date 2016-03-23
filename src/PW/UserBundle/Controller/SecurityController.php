<?php
// src/PW/UserBundle/Controller/SecurityController.php;

namespace PW\UserBundle\Controller;

use PW\PortfolioBundle\Entity\Skill;
use PW\PortfolioBundle\Entity\SkillGroup;
use PW\PortfolioBundle\Entity\Training;
use PW\PortfolioBundle\Form\SkillGroupType;
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
        $query = $em->prepare($this->pdo->getProcedureString('PS_INSERT_REGISTER',$param));
        $query->execute($param);
           $authenticationUtils = $this->get('security.authentication_utils');

           return $this->render('PWUserBundle:connexion:connexion.html.twig', array(
               'last_username' => $authenticationUtils->getLastUsername(),
               'error'         => $authenticationUtils->getLastAuthenticationError(),
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

}