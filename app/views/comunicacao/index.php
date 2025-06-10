<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunicação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/comunicacao.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= BASE_URL ?>/home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"></a>
                    </li>
                </ul>
                <br>
            </div>
        </div>
    </div>
    <!-- Carrossel horizontal compacto -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false" style="max-width: 700px; margin: auto;">
          <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../public/imagens/comunicacao/imagem 1.png" class="d-block w-100" alt="Slide 1" style="height: 600px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                  <img src="../public/imagens/comunicacao/imagem 2.png" class="d-block w-100" alt="Slide 2" style="height: 600px; object-fit: cover;">
                </div>
                <div class="carousel-item">
                  <img src="../public/imagens/comunicacao/imagem 3.png" class="d-block w-100" alt="Slide 3" style="height: 600px; object-fit: cover;">
                </div>
          </div>
          <!-- Setas laterais -->
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
    </div>
    <nav class="pagination-lg">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="<?= BASE_URL ?>/home">ínicio</a>
            </li>
        </ul>
    </nav>
    <!--footer-->
    <footer>
         <div class="footer-container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p> Email:Info@exemplo.com</p>
                <p>Phone:121 56556 5655556</p>
                <p>Adress</p>
            </div>
            <div class="footer-content">
                <h3>Desenvolvedores</h3>
                <ul class="list">
                    <li><a href="">Alessandra Cristina da Silva Pereira</a></li>
                    <li><a href="">Bryan Caristiati Costa</a></li>
                    <li><a href="">Eric Luiz Xavier de Araujo</a></li>
                    <li><a href="">Daniel Jesus Dias Alves</a></li>
                    <li><a href="">Gabriel Araújo de Oliveira</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h3>Fallow Us</h3>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-Twitter"></i></a></li>
                <li><a href=""><i class="fab fa-Instagram"></i></a></li>
                <li><a href=""><i class="fab fa-Linkedin"></i></a></li>
            </div>
         </div>
         <div class="btn-bar">
            <p>Acesse nosso mais novo projeto: localhost/ecoPoint/</p>
            <p>&copy;2025 your compan . All rights reserved </p>
         </div>
     </footer>
     <!--end-footer-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
