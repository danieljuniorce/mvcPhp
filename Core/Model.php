<?php
namespace Core;

class Model
{
    private $pdo;
    public function __construct()
    {
        global $db;
        $this->pdo = $db;
    }
    public static function csrf()
    {
        return $csrf = sha1(md5(date('Y/m/d h:m:s').rand().'crsf'));
    }
    protected function verif_csrf($token)
    {
        //VERIFICAÇÃO DE CSRF
        if ($token == $_SESSION['token']) {
            return true;
        } else {
            return false;
        }
    }
}