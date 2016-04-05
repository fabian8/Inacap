<?php
//Modelo se utiliza para trabajar con la base de datos
class Usuario_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    //mostrar usuarios
    public function mostrar_todo(){
        $query=$this->db->query("select * from Usuario");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
    //Guardar usuarios
    public function save($nombre,$apepat){
        $this->db->query("insert into Usuario(nombre,apepat) values ('".$nombre."','".$apepat."')");
        $this->db->close();
    }
    public function borrar($usuario_id){
        $this->db->query("delete from Usuario where usuario_id='".$usuario_id."'");
        $this->db->close();

        
    }
    public function find_by_id($usuario_id){
        $query=$this->db->query("select * from Usuario where usuario_id='".$usuario_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
        
    }


}