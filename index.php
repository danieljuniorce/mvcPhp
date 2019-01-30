<?php
    ini_set('display_errors', 'On');
    require_once('Core/core.php');
    spl_autoload_register(function($class){

        if(strpos($class, 'Controller') > -1)
        {
            if(file_exists('App/Controller/'.$class.'.php'))
            {
                require_once('App/Controller/'.$class.'.php');
            }
        } else if (file_exists('App/Model/'.$class.'.php'))
        {
            require_once('App/Model/'.$class.'.php');
        } else
        {
            require_once('Core/'.$class.'.php');
        }

    });

$core = new Core();
$core->run();
