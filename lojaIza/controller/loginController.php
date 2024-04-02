<?php

if ($_POST) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];
   
    require_once '../model/usrModel.php';
        $usr =  new usrModel();

    if(!empty($email) && !empty($senha))
        $usr->login($email,$senha);
    session_start();
    $_SESSION['id'] = $usr->getId();
    $_SESSION['tipo_usuario'] = $usr->getTipo_usuario();
    if($usr->getTipo_usuario()==1){

    }
        

} else {
    header('location:./loginPage.php?cod=193');
}
?>


