<?php

if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Controlador_test extends CI_Controller {//controlador
   public function index(){
      echo 'Página inicial del controlador recien creado';
   }
   public function accion2(){
      echo 'Página 2';
   }
   public function accion3(){
      echo 'Página 3';
   }
}
?>