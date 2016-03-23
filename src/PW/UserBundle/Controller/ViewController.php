<?php
/**
 * Created by PhpStorm.
 * User: Litybe
 * Date: 20/03/2016
 * Time: 13:43
 */

namespace PW\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PW\UserBundle\Entity\User;
use PW\UserBundle\Form\ProfileType;
use PW\PDO\QueryExecution;
use PW\PortfolioBundle\Entity\Skill;
use PW\PortfolioBundle\Entity\SkillGroup;
use PW\PortfolioBundle\Form\SkillGroupType;
use PW\PortfolioBundle\Form\SkillType;


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
        $user = new User();
        $profile = new ProfileType();
        $userId = $this->container->get('security.context')->getToken()->getUser()->getId();
        $em = $this->getDoctrine()->getManager()
                                 ->getConnection();
        $id=array($userId);
        $query = $em->prepare($this->pdo->getProcedureString('profile',$id));
        $query->execute($id);
        $result=$query->fetch();
        $profile->setLastname($result['LastName']);
        $profile->setFirstname($result['FirstName']);
        $profile->setEmail($result['email']);
        $profile->setCellphone($result['Cellphone']);
        $profile->setPassword($result['password']);
        $profile->setIsVisibleLastName((bool)$result['IsVisibleLastName']);
        $profile->setIsVisibleFirstName((bool)$result['IsVisibleFirstName']);
        $profile->setIsVisibleEmail((bool)$result['IsVisibleEmail']);
        $profile->setIsVisibleLastName((bool)$result['IsVisibleAddress']);
        $profile->setAddress($result['UserAddress']);
        $profile->setZipcode($result['UserZipCode']);
        $profile->setCity($result['UserCity']);
        $form = $this->get('form.factory')->create($profile, $user);


        if ($form->handleRequest($request)->isValid()) {
            $param =array(
                $user->getLastName(),
                $user->getFirstName(),
                $user->getEmail(),
                $user->getCellphone(),
                $user->getUserAddress(),
                $user->getUserZipCode(),
                $user->getUserCity(),
                (int)$user->getIsVisibleLastName(),
                (int)$user->getIsVisibleFirstName(),
                (int)$user->getIsVisibleEmail(),
                (int)$user->getIsVisibleCellphone(),
                (int)$user->getIsVisibleAddress(),
                $user->getPassword(),
                $userId
            );


            $query = $em->prepare($this->pdo->getProcedureString('PS_UPDATE_USER',$param));
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

    public function addAction(Request $request)
    {


    /*       $listSkills = array(
               array('id' => 2, 'nameSkill' => 'PHP', 'skillMastery' => '1'),
               array('id' => 3, 'nameSkill' => 'Javascript', 'skillMastery' => '2'),
               array('id' => 4, 'nameSkill' => 'Jquery', 'skillMastery' => '3'),
               array('id' => 5, 'nameSkill' => 'JB', 'skillMastery' => '5'),
               array('id' => 6, 'nameSkill' => 'Word', 'skillMastery' => '4'),
               array('id' => 7, 'nameSkill' => 'Menuiserie', 'skillMastery' => '1'),
               array('id' => 8, 'nameSkill' => 'Lancé de bigornos', 'skillMastery' => '3'),
               array('id' => 9, 'nameSkill' => 'Trotinette', 'skillMastery' => '3'),
               array('id' => 9, 'nameSkill' => 'Equitation sur licornes', 'skillMastery' => '5')
           ); */

        $em = $this->getDoctrine()->getManager()->getConnection();
        $query = $em->prepare('CALL PS_SELECT_SKILLS');


        $skill = new  Skill();
        $form = $this->createForm(SkillType::class, $skill);


        if ($form->handleRequest($request)->isValid()) {

            $param = array(
                $skill->getSkillName(),
                $skill->getSkillMastery(),
                $skill->getSkillOrder()
            );
            $em = $this->getDoctrine()->getManager()->getConnection();
            $sql = $em->prepare($this->pdo->getProcedureString('PS_INSERT_SKILL', $param));
            $sql->execute($param);

            return $this->redirectToRoute('pw_user_test', array());
        }

        $query->execute();
        $skills = $query->fetchAll();

        if (!$skills) {
            throw $this->createNotFoundException(
                'Aucune compétences trouvées '
            );
        }

        return $this->render('PWUserBundle:test:test.html.twig', array(
            'form' => $form->createView(),
            'skills' => $skills
        ));

    }

}