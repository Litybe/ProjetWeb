<?php

/**
 * Created by PhpStorm.
 * User: Litybe
 * Date: 19/03/2016
 * Time: 09:38
 */
namespace PW\PDO;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class QueryExecution extends controller
{
    private $bdd;
    /*public function __construct(){
        $this->bdd = $this->getDoctrine()->getManager()
                                         ->getConnection();
    }

    public function execStroredProcedureNonQuery($name, $parameters)
    {
        $stmt = $this->bdd->prepare($this->getProcedureString($name, $parameters));
        $stmt->execute($parameters);
    }

    public function execStroredProcedureQuery($name, $parameters)
    {
        $stmt = $this->bdd->prepare($this->getProcedureString($name, $parameters));
        $stmt->execute($parameters);
        return $stmt;
        /*$resultat=$stmt->fetchAll();
        print_r($resultat);
    }

    public function stopConnexion(){
        $this->bdd=NULL;
    }*/
    public function getProcedureString($name, $parameters)
    {
        $procedure = "";
        $procedure .= "CALL ".$name;
        if(count($parameters) > 0)
            $procedure.= "(";
        for($i = 0; $i < count($parameters); $i++)
        {
            $procedure.= "?";
            if(($i < count($parameters)-1))
            {
                $procedure.= ",";
            }
        }
        if(count($parameters) > 0)
            $procedure .= ")";

        return $procedure;
    }
}