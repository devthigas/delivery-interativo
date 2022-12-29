<?php
@session_start(); 
require_once("conexao.php");

$email_login = $_POST['email']; 
$senha_login = $_POST['senha']; 

$query = $dbh->query("SELECT * FROM usuarios WHERE email = '$email_login' and senha = $senha_login"); 
$res = $query->fetchAll(PDO::FETCH_ASSOC); 
$total_reg = @count($res);

if($total_reg > 0){
    $_SESSION['id'] = $res[0]['id']; 
    $_SESSION['nome'] = $res[0]['nome']; 
    $_SESSION['nivel'] = $res[0]['nivel']; 
    $_SESSION['ativo'] = $res[0]['ativo']; 

    if($_SESSION['ativo'] == "Sim"){
        header("location: painel.php");
    } else{
        echo "<script>window.alert('Usuário não está ativo')</script>"; 
        echo "<script>window.location='index.php'</script>";
    }

} else{

    header("location: index.php?erro");

}


?>