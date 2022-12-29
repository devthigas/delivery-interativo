<?php
$senha = "123"; 
$senha_cript = md5($senha); 

require_once("conexao.php");
$query = $dbh->query("SELECT * FROM usuarios WHERE nivel = 'Admin'"); 
$res = $query->fetchAll(PDO::FETCH_ASSOC); 
$total_reg = @count($res);

if($total_reg == 0){
  $dbh->query("INSERT INTO usuarios SET nome = 'Admin', email = '$email_sistema', senha = '$senha', senha_cript = '$senha_cript', nivel = 'Admin', ativo = 'Sim', data = curDate()"); 
} 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Delivery</title>
  <link rel="icon" type="image/x-icon" href="../img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div class="container mt-5 pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
              <div class="mb-5 text-center">
                <img class="img-fluid"  src="../img/logo.png" alt="" width="100px">
              </div>
                <div class="form-data">
                  <form action="autenticar.php" method="post">
                      <div class="forms-inputs mb-4"> <span>Email ou CPF</span> 
                        <input class="form-control" autocomplete="off" type="text" required name="email" >
                     </div>
                     <div class="forms-inputs mb-4"> <span>Password</span> 
                        <input class="form-control" autocomplete="off" type="password" required name="senha">
                    </div>
                    <div class="mb-3"> 
                      <button class="btn btn-dark w-100">Login</button> 
                    </div>
                    <div class="text-danger"><?php if(isset($_GET['erro'])){echo "Email e senha incorretos";}?></div>
                  </form>
                  <div class="mb-3"> 
                      <button type="button" class="btn w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Recuperar senha</button> 
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Reuperar senha</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-recuperar">
          <div class="forms-inputs mb-4"> <span>Digite seu e-mail</span> 
            <input class="form-control" id="email-recuperar" autocomplete="off" type="text" required  name="rec-senha">
            <div id="mensagem-recuperar"></div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-dark">Recuperar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">


  $("#form-recuperar").submit(function () {
   event.preventDefault();
   var formData = new FormData(this);

   $.ajax({
     url: "recuperar-senha.php",
     type: 'POST',
     data: formData,

     success: function (mensagem) {
       $('#mensagem-recuperar').text('');
       $('#mensagem-recuperar').removeClass()
       if (mensagem.trim() == "Recuperado com Sucesso") {
         //$('#btn-fechar-rec').click();					
         $('#email-recuperar').val('');
         $('#mensagem-recuperar').addClass('text-success')
         $('#mensagem-recuperar').text('Sua Senha foi enviada para o Email')			

       } else {

         $('#mensagem-recuperar').addClass('text-danger')
         $('#mensagem-recuperar').text(mensagem)
       }

     },

     cache: false,
     contentType: false,
     processData: false,

   });
   
 });
</script>



</body>
</html>