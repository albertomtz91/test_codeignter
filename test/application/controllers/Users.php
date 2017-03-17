<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	class Users extends CI_Controller {
   		public function __construct() {
      	parent::__construct();
    }
  	public function index() {
      $data = array();
      $this->load->model('user_model');
      $data['users'] = $this->user_model->obtener_todos();
      $this->load->view('users/header');
      $this->load->view('users/index', $data);
      $this->load->view('users/footer');
   }
    public function guardar($id=null){
      $data = array();
      $this->load->model('User_Model');
      if($id){
         $user = $this->User_Model->obtener_por_id($id);
         $data['id'] = $user->id;
         $data['nombre'] = $user->nombre;
         $data['apellido'] = $user->apellido;
         $data['correo'] = $user->correo;
         $data['fechan'] = $user->fecha_n;
         $data['estadon'] = $user->estado_n;
      }else{
         $data['id'] = null;
         $data['nombre'] = null;
         $data['apellido'] = null;
         $data['correo'] = null;
         $data['fechan'] = null;
         $data['estadon'] =null;
      }
      $this->load->view('users/header');
      $this->load->view('users/guardar', $data);
      $this->load->view('users/footer');
    }
    public function guardar_post($id=null){
      if($this->input->post()){
      $nombre = $this->input->post('nombre');
      $apellido = $this->input->post('apellido');
      $correo = $this->input->post('correo');
      $fechan = $this->input->post('fecha_n');
      $estadon = $this->input->post('estado_n');
      $this->form_validation->set_rules('nombre', 'nombre', 'required');
      $this->form_validation->set_rules('apellido', 'apellido', 'required');
      $this->form_validation->set_rules('correo', 'correo', 'required');
      $this->form_validation->set_rules('fecha_n', 'fecha', 'required');
      $this->form_validation->set_rules('estado_n', 'estado', 'required');
      //Verifica que el formulario esté validado.
      if ($this->form_validation->run() == TRUE){
         $this->load->model('user_model');
         $this->user_model->guardar($nombre, $apellido, $correo, $fechan, $estadon, $id);
         redirect('users');
      }else{
            $data = array();
            $data['id'] = $id;
            $data['nombre'] = $nombre;
            $data['apellido'] = $apellido;
            $data['correo'] = $correo;
            $data['fechan']= $fechan;
            $data['estadon'] = $estadon;
            $this->load->view('users/header');
            $this->load->view('users/guardar', $data);
            $this->load->view('users/footer');
         }
         }else{
            $this->guardar();
         }
    }
    public function eliminar($id){
      $this->load->model('user_model');
      $this->user_model->eliminar($id);
      redirect('users');
    }
 }
?>