<?php
namespace Controllers;
use \Core\Controller;
class IndexController extends Controller {

    public function index()
    {
        $this->template('', 'home');
    }

}