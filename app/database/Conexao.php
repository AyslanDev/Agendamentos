<?php

namespace app\database;

use PDO;
use Exception;

abstract class Conexao{

    private $host = DBDATA["host"];
    private $dbName = DBDATA["dbname"];
    private $password = DBDATA["password"];
    private $user = DBDATA["user"];

    public function connect()
    {
 
        try{
            $conexao = new PDO('mysql:host=' . $this->host . ';dbname='. $this->dbName, $this->user, $this->password);            
            return $conexao;        
        }catch(Exception $erro){
            return $erro->getMessage();
        }

    }    

}