<?php
use Core\Controller;

class indexController extends Controller {

    public function index()
    {
        $this->template('', 'home');
    }

}