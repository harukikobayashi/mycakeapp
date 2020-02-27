<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController {

    public function initialize() {
        $this->viewBuilder()->setLayout('hello');
    }

    public function index() {
        $this->set('header', ['subtitle'=>'from Controller with brave']);
        $this->set('footer', ['copyright'=>'あいつ']);
    }


}