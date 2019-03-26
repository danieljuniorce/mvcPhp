<?php
namespace Controllers;
use \Core\Controller;
/*
 * Controller para requisições ajax;
 */
class AjaxController extends Controller
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