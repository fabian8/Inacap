<?php

class Ciudad extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Ciudad_model');
        $this->load->helper('url'); //Manejar rutas de la página
    }
    public function index(){
       $result=$this->Ciudad_model->mostrar_todo();
        $data["ciudad"]=$result->result_object();
        //Llamar vista index
        $this->load->view('Ciudad_index',$data);
    }
    public function nuevo(){
      $this->load->view ('ciudad_nuevo');
    }
    public function save(){
        $nombre=  $this->input->post("nombre");
        $this->Ciudad_model->save($nombre);
        redirect('ciudad');
    }
    public function borrar ($ciudad_id){
        $this->Ciudad_model->borrar($ciudad_id);
        redirect('ciudad');
    }
    public function detail($ciudad_id){
    $data["ciudad"]=$this->Ciudad_model->find_by_id($ciudad_id);
        $this->load->view('ciudad_detail',$data);
    }
           
}
