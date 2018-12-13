<?php 

    class cadastroController extends controller{

        public function index(){
            $db = new cadastro();

            $this->template('cadastro');
        }

    }