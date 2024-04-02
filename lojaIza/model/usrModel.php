<?php

require_once 'ConexaoMysql.php';

class usrModel {
    
    public  $id;
    public  $nome;
    public $email;
    public  $senha;

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
            }
        }
        $db->Desconectar();
        return $resultList;
    }
    
    public function cadastro(){

        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'INSERT INTO usuario (nome,email,senha) values ("'.$this->nome.'","'.$this->email.'","'.$this->senha.'")';
         $db->Executar($sql);
        
       
       header('location:../index.php?sucess');
        
    }

    public function login($email,$senha){
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = "SELECT * FROM usuario where email = '$email' and senha = '$senha' ";

        $db->Consultar($sql);
        $result = $db->total;

        if($result == 1 ){
            @session_start();
            $_SESSION['login'] = $email;

            if(isset($lembrar)){
                if($lembrar == 1){
                    setcookie('email', $email, time() + (86400 * 30), "/"); 
                }
            }else{
                if (isset($_COOKIE['email'])) {
                    //destruir o cookie
                    setcookie("email", "", time()  - (172800 * 30), "/");
                }
            }

            header('location:../index.php');

        } else {
        
            header('location: ../loginPage.php?cod=171');
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