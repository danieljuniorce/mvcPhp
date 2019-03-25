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
            $currentController = 'IndexController';
            $params = array();
        }
        /*if (!file_exists('App/Controller/'.$currentController.'.php') /*|| !method_exists($currentController, $currentAction)) {
            $currentController = 'notFoundController';
            $currentAction = 'index';
        }
        */
            $prefix = '\Controllers\\';
            $newController = $prefix.ucfirst($currentController);
            $c = new $newController();

            echo $newController.'<br>';
            echo $currentAction;
            call_user_func_array(array($c, $currentAction), $params);
        }
    }