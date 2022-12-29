<?php

$email_rec = $_POST['rec-senha']; 

require_once("conexao.php");
$query = $dbh->query("SELECT * FROM usuarios WHERE email = '$email_rec'"); 
$res = $query->fetchAll(PDO::FETCH_ASSOC); 
$total_reg = @count($res);

if($total_reg > 0){
    $senha = $res[0]['senha']; 
    $destinatario = $email_rec; 
    $assunto = $nome_sistema . "Recuperação de Senha!"; 
    $mensagem = "Sua Senha é ". $senha; 
    $cabecalho = "From ". $email_sistema; 
    @mail($destinatario, $assunto, $mensagem, $cabecalho ); 
    echo "Recuperado com Sucesso"; 

} else {
    echo "Email não cadastrado!"; 
}

