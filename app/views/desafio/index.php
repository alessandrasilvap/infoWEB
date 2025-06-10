<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Responsivo</title>
    <link rel="stylesheet" href="../home/index.css">
</head>
<body>
    <div class="banner-azul">
        <!--header-->
        <header>
            <div class="container">
                <nav>
                    <div class="logo">
                        <a href="banenr.html">infoWEB</a>
                    </div>
                    <ul class="ul">
                        <li> <a href="../home/index.html"> HOME</a></li>
                        <li> <a href="../sobre nos/sobre.html"> sobre nós</a></li>
                        <li> <a href="../pagina 3 Desafio/pagina 3.html"> Jogos</a></li>
                     
                    </ul>
                    <div class="menu-icon">
                        <img src="../home/index-img/menu.png" alt="" height="50">
                    </div>
                </nav>
            </div>
        </header>
          <script src="../home/menu-mob.js"></script>
        <!-- end header-->
    </div>
         <!--main-->
         
        <!-- end main-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"></a>
                    </li>
                </ul>

                <!-- Comentario Banner-->

                </p>
                <iframe style="max-width:100%" src="https://wordwall.net/pt/embed/ac9b785faa814f71b96e4a1fca8c12ea?themeId=2&templateId=10&fontStackId=0" width="500" height="580" frameborder="0" allowfullscreen></iframe>

                <!--QUIZ-->
                <h2 id="quiz">Quiz Eco Point</h2>
                <p>Teste seu conhecimento sobre Reciclagem eletrônica! Você pode ser tornar um especialista no assunto. Participe do nosso Quiz Eco Point e descubra como você pode fazer a diferença!</p>
                <br>
                <div class="quiz-container">
                    <button class="start-quiz button">Iniciar Quiz</button>
                    <div class="questions-container hide">
                        <h2 class="question"></h2>
                        <div class="answers-container"></div>
                        <button class="next-question button hide">Próxima pergunta</button>
                    </div>
                </div>
                <script>
                    const questions = <?= json_encode($perguntas); ?>;
                </script>
                
                <nav class="pagination-lg">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="../pagina 1/pagina 1.html">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="../pagina 2/pagina 2.html">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="../pagina 3 Desafio/pagina 3.html">3</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
   
</body>

</html>



