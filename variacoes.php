<?php require_once("cabecalho.php"); ?>

<nav class="navbar bg-light fixed-top" style="box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.20);">
    <div class="container-fluid">
      <div class="navbar-brand">
        <a href="itens.php">
          <big><i class="bi bi-arrow-left"></i></big>
        </a>
        <span style="margin-left: 15px;">PIZZA DE CALABRESA</span>
      </div>
      <?php require_once("carrinho.php") ?>
    </div>
  </nav>
<!-- 
  Listas  -->
  <ol class="list-group" style="margin-top: 60px;">
    <!-- Lista 1  -->
    <a href="adicionais.php">
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="me-auto">
          <div class="fw-bold">Pequena</div>
             <span class="valores-item">R$ 25,00 </span>
        </div>
      </li>
    </a>
    <!-- Lista 2  -->
    <a href="">
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="me-auto">
          <div class="fw-bold">Media</div>
             <span class="valores-item">R$30,00 </span>
        </div>
      </li>
    </a>
    <!-- Lista 3  -->
    <a href="">
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="me-auto">
          <div class="fw-bold">Grande</div>
             <span class="valores-item">R$ 35,00</span>
        </div>
      </li>
    </a>
  </ol>

  <hr>
	<div class="conteudo-descricao-item">
	<div class="titulo-descricao-item"><b>Descrição Pizza Calabresa</b></div>
	<p class="descricao-item">Pizza de Calabresa com borda recheada com cheddar, massa fina, bem recheada, tendo como ingredientes tomate, cebola, palmito, calabresa defumada e queijo.</p>
	</div>
	<!-- <div >
		<img class="imagem-produto" src="img/produtos/calabresa.jpg">
	</div> -->

</body>
</html>