<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 30/01/2019
 * Time: 12:42
 */
use Core\Controller;

/*
 * Controller para requisições ajax;
 */
class ajaxController extends Controller
{
    public function index()
    {

    }
    public function teste()
    {
        $dados = array();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $dados['frase'] = 'Meu nome: '.$nome;
        }

        $this->view('ajax', 'teste', $dados);
    }
}