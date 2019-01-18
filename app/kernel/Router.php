<?php

class Router {

    public static function analyse($request){

        $result = array(
            "controller" => "Error",
            "action" => "error404",
            "params" => array()
        );

        if($request === "" || $request === "/"){
            $result['controller'] = "Index";
            $result['action'] = "display";
        }

        else{
            $parts = explode("/", $request);
            
            if($parts[0] === "genre" && count($parts) == 2){ // Route pour afficher les films d'un genre
                $result['controller'] = 'Genre';
                $result['action'] = 'display';
                $result["params"]['id'] = $parts[1];  
            }
            elseif($parts[0] === "film" && count($parts) == 2){ // Route pour afficher les infos d'un film
                $result['controller'] = "Film";
                $result['action'] = "display";
                $result["params"]['id'] = $parts[1];  
            }

        }

        return $result;
    } // Fin fonction analyze.

} // Fin class Router.

