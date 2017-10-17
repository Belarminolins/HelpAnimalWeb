<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Controller_login {
    
    function __constructor()
	{
		parent::Controller();	
	}
    function entrar() {


        if (!isset($_POST['manterusuario'])) {   //   Se não recebemos nenhum valor proveniente do formulario, significa que o usuario recém ingressa.   
                //   Portanto apresentamos a tela do formulario de ingresso.
        } else {//   Se o usuario já passou pela tela inicial e pressionou o botão "Inserir"
             
            $this->form_validation->set_rules('email', 'required|valid_email');//Configuramos as validações ajudando-nos com a biblioteca form_validation do Framework Codeigniter
            $this->form_validation->set_rules('senhaUsuario', 'required');

        if (($this->form_validation->run() == FALSE)) {            //   Verificamos se o usuario superou a validação
                
                $this->load->view('index');                     //   Em caso negativo, voltamos a apresentar a tela de login
                
            } else {                                       //   Se ambos campos foram corretamente preenchidos pelo usuario,
                
                $this->load->model('loginModel');
                $ExisteUsuarioePassoword = $this->loginModel->ValidarUsuario($_POST['email'], $_POST['senhaUsuario']);   //   comprovamos que o usuario exista na base de dados e a password inserida seja correta

                if ($ExisteUsuarioePassoword) {// A variavel $ExisteUsuarioePassoword recebe valor TRUE se o usuario existe e FALSE em caso negativo. Este valor é determinado pelo modelo.
                   
                    $this->load->view('telaUsuario'); //Se o usuario inseriu dados de acesso válido, imprimimos uma mensagem de validação de sucesso na tela 
                                    
                } else {   //   Se não conseguiu validar
                    
                    $data['error'] = "E-mail ou senha incorreta, por favor volte a tentar";
                    $this->load->view('cadastro', $data);//O regressamos à tela de login e passamos como parâmetro a mensagem de erro a ser apresentada na tela
                    
                }
            }
        }
    }
     

}
