<?php
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON');

class Kernel {

    public static function autoload($class){ // Imaginons que $class = Film
        if(file_exists(ROOT.'/app/kernel/'.$class.'.php')){
            require_once ROOT.'/app/kernel/'.$class.'.php';
        } else if(file_exists(ROOT.'/app/controllers/'.$class.'.php')){
            require_once ROOT.'/app/controllers/'.$class.'.php';
        } else if(file_exists(ROOT.'/app/models/'.$class.'.php')){ // Si /app/models/Film.php existe
            require_once ROOT.'/app/models/'.$class.'.php'; // alors require_once /app/models/Film.php 
        }
        //echo $class.'<br>';
    }

    public static function run(){
        // Autoload
        spl_autoload_register(array('Kernel', 'autoload'));

        // Analyser la requête
        $request = isset($_GET['request']) ? $_GET['request'] : '';
        $route = Router::analyse($request);
 
        // Instancier le contrôleur et executer l'action
        $class = $route['controller']."Controller"; //
        if(class_exists($class)){
            $controller = new $class($route);
            $method = array($controller, $route['action']);
            if(is_callable($method)){
                call_user_func($method);
            }
        }
    }


}