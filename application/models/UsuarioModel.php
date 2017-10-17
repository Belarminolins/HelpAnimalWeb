<?php

class UsuarioModel extends CI_Model {
    
    
    public $email;
    public $nomeUsuario;    
    public $sobreNomeUsuario;
    public $senhaUsuario;
    public $senhaconfig;

    public function __construct() {
        
        parent::__construct();
        
    }
    function VerificaEmail(){
        $this->db->where('email',$email);
        return $this->db->get('manterusuario')->row_array ;        
        
   }
    
    //Inserir os dados do Formulario no Banco
    public function inserir() {
       
        return $this->db->insert('manterusuario', $this);
                
    }
    
}


