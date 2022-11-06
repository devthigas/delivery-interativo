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

</body>
</html>