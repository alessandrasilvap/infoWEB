<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Responsivo</title>
    <link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
    <div class="banner-azul">
        <header>
            <div class="container">
                <nav>
                    <div class="logo">
                        <a href="banenr.html">infoWEB</a>
                    </div>
                    <ul class="ul">
                        <li><a href="<?= BASE_URL ?>/home">Home</a></li>
                        <li><a href="<?= BASE_URL ?>/sobre">Sobre nós</a></li>
                        <li><a href="<?= BASE_URL ?>/desafio">Jogos</a></li>
                    </ul>
                    <div class="menu-icon">
                        <img src="../public/imagens/home/menu.png" alt="" height="50">
                    </div>
                </nav>
            </div>
        </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= BASE_URL ?>/home">Inicio</a>
                </ul>

                <!--Comentario Banner-->
                
                <div>
                    <br><br><p>Este site foi criado com o intuito de explicar questões básicas de informática essenciais para navegar na web, em sites especializados, informativos e até mesmo para usar redes sociais.</p><br>
                    <img class="imagem"  src="../public/imagens/sobre/sobre nós.JPG" width="800" height="400"/>
                </div>
                <nav class="pagination-lg">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="<?= BASE_URL ?>/home">ínicio</a>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
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
            <p>&copy;2025 your compan . All rights reserved</p>
         </div>
     </footer>
     <!--end-footer-->
    <script src="../public/js/menu-mob.js"></script>
</body>
</html>
