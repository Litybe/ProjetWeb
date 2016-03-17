<?php
// src/OC/UserBundle/DataFixtures/ORM/LoadUser.php

namespace PW\UserBundle\DataFixtures\ORM;


use Doctrine\Common\Persistence\ObjectManager;
use PW\UserBundle\Entity\User;

class LoadUser
{
    public function load(ObjectManager $manager)
    {
        // Les noms d'utilisateurs à créer
        $listNames = array('Alexandre', 'Marine', 'Anna');

        foreach ($listNames as $name) {
            // On crée l'utilisateur
            $user = new User;

            // Le nom d'utilisateur et le mot de passe sont identiques
            $user->setPseudo($name);
            $user->setUserPassword($name);

            // On définit uniquement le role ROLE_USER qui est le role de base
            $user->setRoles(array('ROLE_USER'));

            // On le persiste
            $manager->persist($user);
        }

        // On déclenche l'enregistrement
        $manager->flush();
    }
}