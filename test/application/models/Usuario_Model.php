<?php
class Usuario_Model extends CI_Model {
   public function __construct() {
      parent::__construct();
   }
   public function usuario_por_nombre_contrasena($nombre, $contrasena){
      $this->db->select('id, nombre');
      $this->db->from('login');
      $this->db->where('nombre', $nombre);
      $this->db->where('contrasena', $contrasena);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
}