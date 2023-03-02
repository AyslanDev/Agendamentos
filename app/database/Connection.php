<?php

namespace app\database;

use PDO;
use Exception;

class Connection extends Conexao
{
    public $conexao = null;
    
    public function conecta(){

        $this->conexao = $this->connect();
        return $this->conexao;

    }

    public function registros($query){

        $total = $query->rowCount();
        return $total;
    }

    public function consulta($query, $array = null ) 
    {
        try {

            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query  = str_replace('SQL_CACHE', " ", $query);
            
            $consulta = $this->conexao->prepare($query);
            $consulta->execute($array);

        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

        return $consulta;
    }

    public function resultado($query) 
    {
        $lista = $query->fetch(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function getAll(string $table)
    {
        $data = [];        
        $qr = $this->consulta("SELECT * FROM {$table}");           
        if($this->registros($qr) > 0)
        {
            while($row = $this->resultado($qr))
            {                
                $data[] = $row;
            }
        }        
        return $data;
    }

    public function getById(string $table, int $id)
    {        
        $arrayValue[':id'] = $id;
        $qr = $this->consulta("SELECT * FROM {$table} WHERE Id = :id", $arrayValue);           
        if($this->registros($qr) > 0)
        {   
            $row = $this->resultado($qr);         
        }        
        return $row;
    }
}