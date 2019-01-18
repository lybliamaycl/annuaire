<?php
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON');



class Genre extends Model{
    
// Requête SQL pour avoir tous les genres de la DB dans la nav.
    public static function getGenre(){
        $db = Database::getInstance();
        $sql = "SELECT * from genres";
        $genres = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
        return $genres;
    }

// Requête SQL pour avoir tous les genres d'un film.
    public static function getGenreFromFilm($idFilm){
        $db = Database::getInstance();
        $sql = $db->prepare("SELECT * FROM genres 
                INNER JOIN filmgenre 
                WHERE filmgenre.id_genre = genres.id_genre
                AND filmgenre.id_film = :id_film");
        $sql->bindValue(':id_film', $idFilm, PDO::PARAM_INT);
        $sql->execute();
        $genres = $sql->fetchAll();

        return $genres;
    }

}