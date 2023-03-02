<?php

namespace app\controllers;

use app\database\models\ModelHorarios;
use app\database\models\ModelQuadra;
class HomeController extends Controller
{
    
    public function home(){

        $quadra = new ModelQuadra;
        $horarios = new ModelHorarios;
        $data = $quadra->get();
        $data_horarios = $horarios->get();        

        Controller::view("home", ["imagem1" => $data[0]["Imagem"], 
        "imagem2" => $data[1]["Imagem"], 
        "imagem3" => $data[2]["Imagem"]]);
    }

}

?>