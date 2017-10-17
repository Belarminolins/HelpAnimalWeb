<?php
class LoginModel extends CI_Model{ 
  
   function ValidarUsuario($email,$senha){         //   Consulta Mysql para buscar na tabela Usuario aqueles usuarios que coincidam com o mail e password inscritos na tela de login
      $query = $this->db->where('email',$email);   //   A consulta é efetuada mediante Active Record. Uma maneira alternativa, e em linguagem mais simples, de gerar as consultas Sql.
      $query = $this->db->where('senhaUsuario',$senhaUsuario);
      $query = $this->db->get('manterusuario');
      return $query->row();    //   Retornamos ao controlador a fila que coincide com a busca. (FALSE no caso de não existirem coincidencias)
}

   }

