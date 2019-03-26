<?php
namespace Core;

class Model
{
    private $pdo;
    public function __construct()
    {
        $dbConfig = $this->getConfig('dbconfig');
        try {
            $this->pdo = new \PDO($dbConfig['dbtype'].':host='.$dbConfig['dbhost'].';dbname='.$dbConfig['dbname'], $dbConfig['dbuser'], $dbConfig['dbpassword']);
        } catch (PDOException $e) {
            echo 'ERROR: '.$e->getMessage();
        }
    }

    public function getConfig($name)
    {
        global $config;
        return $config[$name];
    }
    public function csrf_token()
    {
        return $_SESSION['csrf_token'] = sha1(md5(rand(1,999).time().date('d:m:Y')));
    }

    public function verify_csrf($token)
    {
        if ($token == $_SESSION['csrf_token']) {
            return true;
        } else {
            return false;
        }
    }

    public function getQuery($sql)
    {
        return $this->pdo->query($sql);
    }
    public function getPrepare($sql)
    {
        return $this->pdo->prepare($sql);
    }
}
