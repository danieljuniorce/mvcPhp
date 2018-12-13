<?php
    class loginController extends controller{

        public function index(){

            $this->template('login');
        }

        public function login(){
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $login = new auth();
            $query = $login->login($email, $senha);

            if($query->rowCount() > 0 ){
                $deucerto = 'Deu Certo!';
            }

            $this->template('teste', $deucerto);
        }

    }