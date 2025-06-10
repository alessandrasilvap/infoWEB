<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Responsivo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="../pagina 1/pagina 1.html">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"></a>
                    </li>
                </ul>

                <!--Comentario Banner-->

                
                <br><h2>Bem-vindo!</h2>
                <p>Ao site principal, espero que tenha gostado.</p><br>
                
                <br>
            </div>
        </div>
    </div>
    
<!-- Inclua Bootstrap se ainda não tiver -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Carrossel horizontal compacto -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false" style="max-width: 700px; margin: auto;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../mensagens/imagem 1.png" class="d-block w-100" alt="Slide 1" style="height: 600px; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="../mensagens/imagem 2.png" class="d-block w-100" alt="Slide 2" style="height: 600px; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="../mensagens/imagem 3.png" class="d-block w-100" alt="Slide 3" style="height: 600px; object-fit: cover;">
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
                <a class="page-link" href="../pagina 1/pagina 1.html">ínicio</a>
            </li>
        </ul>
    </nav>
</body>
</html>



