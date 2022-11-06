<?php require_once("cabecalho.php"); ?>

<nav class="navbar bg-light fixed-top" style="box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.20);">
    <div class="container-fluid">
      <div class="navbar-brand">
        <a href="index.php">
          <big><i class="bi bi-arrow-left"></i></big>
        </a>
        <span style="margin-left: 15px;">ITENS</span>
      </div>
      <?php require_once("carrinho.php") ?>
    </div>
  </nav>
<!-- 
  Listas  -->
  <ol class="list-group" style="margin-top: 60px;">
    <!-- Lista 1  -->
    <a href="variacoes.php">
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="me-auto">
          <div class="fw-bold">Pizza de Calabresa</div>
             <span class="valores-item">(P) R$ 25,00 / (M) R$30,00 / (G) R$ 35,00</span>
        </div>
      </li>
    </a>
    <!-- Lista 2  -->
    <a href="">
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class=" me-auto">
          <div class="fw-bold">Pizza de Frango Catupiry</div>
             <span class="valores-item">(P) R$ 25,00 / (M) R$30,00 / (G) R$ 35,00</span>
        </div>
      </li>
    </a>
    <!-- Lista 3  -->
    <a href="">
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="me-auto">
          <div class="fw-bold">Pizza de Cheddar com Bacon</div>
             <span class="valores-item">(P) R$ 25,00 / (M) R$30,00 / (G) R$ 35,00</span>
        </div>
      </li>
    </a>
  </ol>

</body>
</html>