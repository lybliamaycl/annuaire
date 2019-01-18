<?php


class GenreController extends Controller {

    public static function display(){
        $films = Film::getFilmByGenre($this->route['params']['id']);
        $genres = Genre::getGenre();

        $template = $this->twig->loadTemplate('genre.html.twig');
        echo $template->render(array(
            'films' => $films,
            'genres' => $genres
         ));
       
    }

}

