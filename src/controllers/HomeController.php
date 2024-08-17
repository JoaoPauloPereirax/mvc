<?php
namespace src\controllers;

use \core\Controller;
use \src\models\User;

class HomeController extends Controller {

    public function index() {
        $data = User::select()->execute();
        //$data = User::select(['name','email'])->execute();//Para selecionar itens específicos

        $this->render('home',[
            'data' => $data
        ]);
    }

}