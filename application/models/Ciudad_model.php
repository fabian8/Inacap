<?php
//Modelo se utiliza para trabajar con la base de datos
class Ciudad_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    //mostrar usuarios
    public function mostrar_todo(){
        $query=$this->db->query("select * from Ciudad");
       $this->db->close();
        return $query;
    }
    //Guardar usuarios
    public function save($nombre){
        $this->db->query("insert into Ciudad(nombre) values ('".$nombre."')");
        $this->db->close();
    }
    public function borrar($ciudad_id){
        $this->db->query("delete from Ciudad where ciudad_id='".$ciudad_id."'");
        $this->db->close();

        
    }
    public function find_by_id($ciudad_id){
        $query=$this->db->query("select * from Ciudad where ciudad_id='".$ciudad_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
        
    }


}