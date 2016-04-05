<?php

class Usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->helper('url'); //Manejar rutas de la página
    }
    public function index(){
        $data["usuario"]=$this->Usuario_model->mostrar_todo();
        //Llamar vista index
        $this->load->view('usuario_index',$data);
    }
    public function nuevo(){
      $this->load->view ('usuario_nuevo');
    }
    public function save(){
        redirect('usuario');
    }
    public function borrar ($usuario_id){
        $this->Usuario_model->borrar($usuario_id);
        redirect('usuario');
    }
    public function detail($usuario_id){
    $data["usuario"]=$this->Usuario_model->find_by_id($usuario_id);
        $this->load->view('usuario_detail',$data);
    }
           
}