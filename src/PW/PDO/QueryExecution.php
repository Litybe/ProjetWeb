<?php

/**
 * Created by PhpStorm.
 * User: Litybe
 * Date: 19/03/2016
 * Time: 09:38
 */
namespace PW\PDO;

class QueryExecution
{
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