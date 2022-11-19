<?php require_once("cabecalho.php"); ?>

<style type="text/css">
  body {
    background: #f2f2f2;
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
  <span class="direita"> <b>R$ 25,00</b></span>
</div>

<div class="d-grid gap-2 mt-4 abaixo">
  <a href='#popup2' class="btn btn-primary botao-carrinho">Adicionar ao Carrinho</a>
</div>

</body>

</html>

<div id="popup2" class="overlay2">
  <div class="popup2">
    <div class="row">
      <div class="col-12">
        <div class="card-add-carrinho">
          <a class="close" href="#">&times;</a>
          <form action="carrinho-final.php">
            <div class="row">
              <div class="col-6">
                <div class="group">
                  <input type="text" class="input" required name="telefone" id="telefone">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="label">Telefone</label>
                </div>
              </div>
              <div class="col-6">
                <div class="group">
                  <input type="text" class="input" required id="nome" name="nome">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="label">Nome</label>
                </div>
              </div>
            </div>
            <div class="row mb-4 ">
              <div class="col-6">
                <a href="index.php" class="btn btn-primary">Comprar mais</a>
              </div>
              <div class="col-6">
                <button class="btn btn-success">Finalizar pedido</button>
              </div>
            </div>
            <div class="text-center" id="mensagem">Mensagem</div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>

<!-- Mascaras JS -->
<script type="text/javascript" src="js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
