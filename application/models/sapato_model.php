<?php 

Class Sapato_model extends CI_Model{
    public $modelo;


    public function __construct(){
    parent :: __construct();
}

    public function inserir(){
        $dados = array ("modelo" => $this->modelo);
        return $this->db->insert('post', $dados);
    }

}

