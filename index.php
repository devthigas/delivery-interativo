  <?php require_once("cabecalho.php"); ?>
  <nav class="navbar bg-light fixed-top" style="box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.20);">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
          <img class="d-inline-block" src="./img/logo.png" width=" 30px">
          Delivery
      </a>
      <?php require_once("carrinho.php") ?>
    </div>
  </nav>
  <main>
    <!-- Grupo de Cards -->
      <div class="row cards">
        <!-- Card 1 -->
          <div class="col-md-4 col-6">
            <a href="itens.php">
              <div class="card azul">
                <h3 class="card-title">PIZZAS</h3>
              </div> 
            </a>
          </div>
          <!-- Card 2 -->
        <div class=" col-md-4 col-6">
          <a href="itens.php">
            <div class="card rosa">
              <h3 class="card-title">PASTÉIS</h3>
            </div>
          </a>
        </div>
        <!-- Card 3  -->
        <div class=" col-md-4 col-6">
          <a href="itens.php">
            <div class="card azul-escuro">
              <h3 class="card-title">SANDUÍCHES</h3>
            </div>
          </a>
        </div>
        <!-- Card 4  -->
        <div class=" col-md-4 col-6">
          <a href="itens.php">
            <div class="card verde">
              <h3 class="card-title">HOT DOGS</h3>
            </div>
          </a>
        </div>
        <!-- Card 5  -->
        <div class=" col-md-4 col-6">
          <a href="itens.php">
            <div class="card roxo">
              <h3 class="card-title">BEBIDAS</h3>
            </div>
          </a>
        </div>
        <!-- Card 6  -->
        <div class=" col-md-4 col-6">
          <a href="itens.php">
            <div class="card vermelho">
              <h3 class="card-title">SOBREMESAS</h3>
            </div>
          </a>
        </div>
      </div>
  </main>

<footer class="rodape">
  <span>Rua Tal n 52 - </span>
  <span class><a class="text-success" href="">
    <i class="bi bi-whatsapp"></i>
    (19)9 74047622</a></span>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>