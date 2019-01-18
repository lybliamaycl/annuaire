<?php
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON');

class IndexController extends Controller {

    public static function display(){
        $genres = Genre::getGenre();

        $template = $this->twig->loadTemplate('index.twig');
        echo $template->render(array(
            'genres' => $genres,
         ));
       
    }

}

