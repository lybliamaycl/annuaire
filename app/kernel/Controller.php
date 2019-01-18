<?php

error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON'); 

   // Récupération du fichier autoload.php
require_once (ROOT.'/vendor/autoload.php');

class Controller {

   protected $route;
   public $loader;

   public function __construct($route){
       $this->route = $route;
       
       $this->loader = new Twig_Loader_Filesystem('app/views'); // Dossier contenant les templates
       $this->twig = new Twig_Environment($this->loader, array(
           'cache' => false
       ));
   }

}

