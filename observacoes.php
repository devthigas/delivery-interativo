<?php require_once("cabecalho.php"); ?>

<style type="text/css">
	body{
		background:#f2f2f2;
	}
</style>

<div class="main-container" style="background:#fff;">
<nav class="navbar bg-light fixed-top" style="box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.20);">
    <div class="container-fluid">
      <div class="navbar-brand">
        <a href="variacoes.php">
          <big><i class="bi bi-arrow-left"></i></big>
        </a>
        <span style="margin-left: 15px;">Resumo do Item</span>
      </div>
      <?php require_once("carrinho.php") ?>
    </div>
  </nav>

  <div class="destaque">
    <b>PIZZA DE CALABRESA</b>
  </div>

  <div class="destaque-qtd">
        <b>QUANTIDADE</b>
    <spam class="direita">
        <big>
            <span><i class="bi bi-dash-circle-fill text-danger"></i></span>
		    <span> <b>1</b> </span>
		    <span><i class="bi bi-plus-circle-fill text-success"></i></span>
        </big>
    </spam>
  </div>

  <div class="destaque-qtd">
        <b>OBSERVAÇÕES</b>
    <div class="form-group mt-3">
			<textarea class="form-control" type="text" name="obs"></textarea>
	</div>
  </div>

  </div>

  <div class="total-pedido">
	<span><b>TOTAL</b></span>
	<span class="direita">	<b>R$ 25,00</b></span>
  </div>

  <div class="d-grid gap-2 mt-4 abaixo">
	    <a href='#popup2' class="btn btn-primary botao-carrinho">Adicionar ao Carrinho</a>
  </div>


</body>
</html>