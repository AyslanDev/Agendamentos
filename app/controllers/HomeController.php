<?php

namespace app\controllers;
use app\database\models\ModelQuadra;
class HomeController extends Controller
{
    
    public function home(){

        $quadra = new ModelQuadra;
        $data = $quadra->get();

        print_r("<pre>");
        var_dump($data);
        print_r("</pre>");

        Controller::view("home", ["imagem1" => $data[0]["Imagem"], "imagem2" => $data[1]["Imagem"], "imagem3" => $data[2]["Imagem"]]);
    }

}

?>