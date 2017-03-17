<?php
	class User_Model extends CI_Model {
   		public function __construct() {
      parent::__construct();
  		}
  	public function guardar($nombre, $apellido, $correo, $fecha_n, $estado_n, $id=null){
      $data = array(
         'nombre' => $nombre,
         'apellido' => $apellido,
         'correo' => $correo,
         'fecha_n' => $fecha_n,
         'estado_n' => $estado_n
      	);
      if($id){
         $this->db->where('id', $id);
         $this->db->update('usuario', $data);
      }else{
         $this->db->insert('usuario', $data);
      	}
    }
    public function eliminar($id){
      $this->db->where('id', $id);
      $this->db->delete('usuario');
   }
   public function obtener_por_id($id){
      $this->db->select('id, nombre, apellido, correo, fecha_n, estado_n');
      $this->db->from('usuario');
      $this->db->where('id', $id);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
   public function obtener_todos(){
      $this->db->select('id, nombre, apellido, correo, fecha_n, estado_n');
      $this->db->from('usuario');
      $this->db->order_by('id');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
    }
 }
?>