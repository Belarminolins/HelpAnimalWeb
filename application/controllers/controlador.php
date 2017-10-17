<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller{
    
    //Função que abre a pagina inicial do sistema.
    public function index(){
        $this->load->view("index");
    }
    public function adm(){
        $this->load->view("administrador");
    }
    //função para abrir a página
    public function cadastro() {
        
        $this->load->view("cadastro");
        
    }
    public function telaUsuario(){
        $this->load->view("telaUsuario");
        
    }
    
    //Grava Os dados informados no Banco de Dados
    public function gravarusuario() {
    
        
    
        $this->load->model('UsuarioModel', '', TRUE);
        
        $this->UsuarioModel->email = $this->input->post('email');
        $this->UsuarioModel->nomeUsuario = $this->input->post('nomeUsuario');       
        $this->UsuarioModel->sobreNomeUsuario = $this->input->post('sobreNomeUsuario');
        $this->UsuarioModel->senhaconfig= $this->input->post('senhaconfig');
        $this->UsuarioModel->senhaUsuario = $this->input->post('senhaUsuario');
       
     
       

        /* Mostra uma mensagem ao concluir o cadastro */
        $mensagem = array();
        if ($this->UsuarioModel->inserir()) {
          
            $mensagem['mensagem'] = "Seu cadastro foi realizado com sucesso!";
         
            
        } else {

            $mensagem['mensagem'] = "Erro na Gravação. Tente Novamente!";
         
        }
          $this->load->view('cadastro', $mensagem);
               
                
        
    }
    
    
    
}







