<?php

namespace app\controllers;

class HomeController extends Controller
{
    
    public function home(){
        Controller::view("home");
    }

}