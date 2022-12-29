<?php 

$user = 'root';
$pass = '';
$banco = 'delivery_interativo';
$servidor = 'localhost'; 


date_default_timezone_set('America/Sao_Paulo'); 

try {
    $dbh = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $user, $pass);

} catch (Exception $e) {
    echo "Erro ao conectar ao banco de dados". $e;
}


$nome_sistema = "Pizzaria"; 
$email_sistema = "conat@gmail.com";
$fone_sistema = "(19)9 7404-7622"; 
$whatsapp_sistema = '55'.preg_replace('/[ ()-]+/' , '' , $fone_sistema);

?>

