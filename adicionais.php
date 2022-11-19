<?php require_once("cabecalho.php"); ?>

<nav class="navbar bg-light fixed-top" style="box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.20);">
    <div class="container-fluid">
      <div class="navbar-brand">
        <a href="variacoes.php">
          <big><i class="bi bi-arrow-left"></i></big>
        </a>
        <span style="margin-left: 15px;">Pizza Calabresa - Tamanho: P</span>
      </div>
      <?php require_once("carrinho.php") ?>
    </div>
  </nav>

  <div class="titulo-adicionais">
    Inserir Adicionais?
  </div>

<!-- Listas  -->
  <ol class="list-group ">
    <!-- Lista 1  -->
    <a href="variacoes.php">
      <li class="list-group-item d-flex justify-content-between align-items-start">
          <div>Calabresa
          <div class="valores-item">R$5,00</div>
          </div>
          <div><i class="bi bi-square"></i></div>
      </li>
    </a>
    <!-- Lista 2  -->
    <a href="variacoes.php">
      <li class="list-group-item d-flex justify-content-between align-items-start">
          <div>Cheddar
          <div class="valores-item">R$5,00</div>
          </div>
          <div><i class="bi bi-square"></i></div>
      </li>
    </a>
    <!-- Lista 3  -->
    <a href="variacoes.php">
      <li class="list-group-item d-flex justify-content-between align-items-start">
          <div>Bacon
          <div class="valores-item">R$5,00</div>
          </div>
          <div><i class="bi bi-square"></i></div>
      </li>
    </a>
  </ol>

  <div class="valor-total">
    Total <b>R$ 25,00</b>
  </div>

  <div class="titulo-adicionais-2">
    Remover Itens?
  </div>

  <ol class="list-group ">
    <!-- Lista 1  -->
    <a href="variacoes.php">
      <li class="list-group-item d-flex justify-content-between align-items-start">
          <div>Calabresa
            <div class="valores-item">R$5,00</div>
          </div>
          <div><i class="bi bi-check-square-fill"></i></div>
      </li>
    </a>

    <a href="variacoes.php">
      <li class="list-group-item d-flex justify-content-between align-items-start">
          <div>Calabresa
            <div class="valores-item">R$5,00</div>
          </div>
          <div><i class="bi bi-check-square-fill"></i></div>
      </li>
    </a>
    <a href="variacoes.php">
      <li class="list-group-item d-flex justify-content-between align-items-start">
          <div>Calabresa
            <div class="valores-item">R$5,00</div>
          </div>
          <div><i class="bi bi-check-square-fill"></i></div>
      </li>
    </a>
  </ol>
  <div class="d-grid mt-4">
  <a href="observacoes.php" class="btn btn-adicionais btn-primary" type="button">Avançar</a>
</div>
</body>
</html>