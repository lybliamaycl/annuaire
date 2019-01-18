<?php

class FilmController extends Controller {

    public static function display(){

        $film = Film::getFilmInfos($this->route["params"]["id"]);
        $genresFilm = Genre::getGenreFromFilm($this->route["params"]["id"]);
        $genres = Genre::getGenre();
        
        $template = $this->twig->loadTemplate('film.html.twig');
        echo $template->render(array(
            'film' => $film,
            'genresFilm' => $genresFilm,
            'genres'    => $genres
         ));
    }



}

// Afficher l'intégralité des informations d'un film.