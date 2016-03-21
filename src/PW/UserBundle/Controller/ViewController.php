<?php
/**
 * Created by PhpStorm.
 * User: Litybe
 * Date: 20/03/2016
 * Time: 13:43
 */

namespace PW\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use PW\UserBundle\Entity\User;
use PW\UserBundle\Form\ProfileType;
use PW\PDO\QueryExecution;


class ViewController extends controller
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = new QueryExecution();
    }

    public function indexAction(Request $request)
    {
        return $this->render('PWUserBundle:index.html.twig');
    }

    public function profileAction(Request $request)
    {

        $param =array(
            $request->request->get('form-first-name'),
            $request->request->get('form-last-name'),
            $request->request->get('form-email'),
            $request->request->get('form-cellphone'),
            $request->request->get('form-pseudo'),
            $request->request->get('form-password'),
            'a:1:{i:0;s:9:"ROLE_USER";}'
        );

        $user = new User();
        $profile = new ProfileType();
        $em = $this->getDoctrine()->getManager()
                                 ->getConnection();
        $id=array(1);
        $query = $em->prepare($this->pdo->getProcedureString('profile',$id));
        $query->execute($id);
        $result=$query->fetch();
        $profile->setLastname($result['LastName']);
        $profile->setFirstname($result['FirstName']);
        $profile->setEmail($result['email']);
        $profile->setCellphone($result['Cellphone']);
        $profile->setPassword($result['password']);
        $form = $this->get('form.factory')->create($profile, $user);


        if ($form->handleRequest($request)->isValid()) {
            $param =array(
                $user->getLastName(),
                $user->getFirstName(),
                $user->getEmail(),
                $user->getCellphone(),
                $user->getUsername(),
                $user->getPassword(),
                'a:1:{i:0;s:9:"ROLE_USER";}'
            );


            $query = $em->prepare($this->pdo->getProcedureString('registering',$param));
            $query->execute($param);


            return $this->redirect($this->generateUrl('pw_user_profile'));
        }

        return $this->render('PWUserBundle:Profile:profile.html.twig', array(
            'form' => $form->createView(),
        ));
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
}