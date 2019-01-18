<?php

class Film extends Model {

    public static function getFilmByGenre($idGenre){
        $db = Database::getInstance();
        $sql = $db->prepare("SELECT * FROM films 
                        INNER JOIN filmgenre 
                        WHERE filmgenre.id_genre = :idgenre
                        AND filmgenre.id_film = films.id_film");
        $sql->bindValue(':idgenre', $idGenre, PDO::PARAM_INT);
        $sql->execute();
        $films = $sql->fetchAll();
    
        return $films;
    } 

    public static function getFilmInfos($idFilm){
        $db = Database::getInstance();
        $sql = $db->prepare("SELECT * FROM films 
                            WHERE id_film = :id");
        $sql->bindValue(':id', $idFilm, PDO::PARAM_INT);  
        $sql->execute();
        $film = $sql->fetch();

        return $film;
    }

}

