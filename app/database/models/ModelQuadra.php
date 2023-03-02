<?php

namespace app\database\models;

use app\database\Connection;

class ModelQuadra extends Connection
{

    public $tbquadras = "tbquadras";
    
    public function __construct()
    {   
        $this->conecta();
    }

    public function get()
    {
        $qr_quadras = $this->getAll($this->tbquadras);
        
        return $qr_quadras;
    }

}

?>