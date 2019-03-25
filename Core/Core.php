<?php
namespace Core;

class Core
{
    public static function getInstance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new Core();
        }
        return $inst;
    }

    public function run(){

        $url = (isset($_GET['url']) ? $_GET['url'] : '');

        $params = array();
        if(!empty($url))
        {
            $url = explode('/', $url);

            $currentController = $url[0].'Controller';
            array_shift($url);
            if (isset($url[0]))
            {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }
            if(count($url) > 0){
                $params = $url;
            }
        } else {
            $currentAction = 'index';
            $currentController = 'indexController';
            $params = array();
        }        
            $prefix = '\Controllers\\';
            $newController = $prefix.ucfirst($currentController);
            $c = new $newController();

            call_user_func_array(array($c, $currentAction), $params);
        }
    }