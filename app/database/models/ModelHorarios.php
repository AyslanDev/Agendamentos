<?php

namespace app\database\models;

use app\database\Connection;

class ModelHorarios extends Connection
{
    
    public $tbhorarios = "tbhorarios";
    
    public function __construct()
    {   
        $this->conecta();
    }

    public function get()
    {
        $qr_horarios = $this->getAll($this->tbhorarios);
        
        return $qr_horarios;
    }

}