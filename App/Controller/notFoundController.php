<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 30/01/2019
 * Time: 02:37
 */
use Core\Controller;

class notFoundController extends Controller
{
    public function index()
    {
        $this->view('errors', '404');
    }
}