<?php

require_once 'ConexaoMysql.php';

class usrModel {
    
    public  $id;
    public  $nome;
    public  $email;
    public  $senha;
    public  $tipo_usuario;

    public function __construct() {
        //vazio
    }

   //getters e setters
   public function getId() {
       return $this->id;
   }

   public function getNome() {
       return $this->nome;
   }

   public function getEmail() {
       return $this->email;
   }

   public function getSenha() {
       return $this->senha;
   }

   public function getTipo_usuario() {
    return $this->tipo_usuario;
}
   public function setId($id): void {
       $this->id = $id;
   }

   public function setNome($nome): void {
       $this->nome = $nome;
   }

   public function setEmail($email): void {
       $this->email = $email;
   }

   public function setSenha($senha): void {
       $this->senha = $senha;
   }
   public function setTipo_usuario($tipo_usuario): void {
        $this->tipo_usuario = $tipo_usuario;
}

    //Métodos especialistas
    public function loadAll() {
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM usuario';
        $resultList = $db->Consultar($sql);

        $db->Desconectar();
        return $resultList;
    }

    public function loadById($id) {
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT * FROM usuario where id =' . $id;
        $resultList = $db->Consultar($sql);

        //verifica se retornou um registro do database
        if ($db->total == 1) {
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->nome = $value['nome'];
                $this->email = $value['email'];
                $this->senha = $value['senha'];
                $this->tipo_usuario = $value['tipo_usuario'];
            }
        }
        $db->Desconectar();
        return $resultList;
    }
    
    public function cadastro(){

        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'INSERT INTO usuario (nome,email,senha,tipo_usuario) values ("'.$this->nome.'","'.$this->email.'","'.$this->senha.'","'.$this->tipo_usuario.'")';
         $db->Executar($sql);
        
       
       header('location:../index.php?sucess');
        
    }

    public function login($email,$senha){
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = "SELECT * FROM usuario where email = '$email' and senha = '$senha' ";

        $db->Consultar($sql);
        $result = $db->total;
        $user = new usrModel();
        if($result>0){
        foreach($result as $key => $value){
            $this->id = $value['id'];
            $this->nome = $value['nome'];
            $this->tipo_usuario = $value['tipo_usuario_id'];
            $this->email = $value['email'];
        }
    }
    }

    public function loadIdUser(){
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql =  'SELECT id FROM usuario';

        $result=$db->Consultar($sql);

        return $result;
    }

}

?>