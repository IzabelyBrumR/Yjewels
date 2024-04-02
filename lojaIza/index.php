<!DOCTYPE html>
<html>
    <head>
        <title>Yjewels</title>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
            .btn {
                background-color: white;
                color: black;
                border: none;
                transition: all linear 160ms;
                margin: 0;
            }
            .btn:hover {
                transform: scale(1.05);
                background-color: rgba(92, 172, 241, 0.651);
            }
            section.especialidades{
                padding: 40px 4%;
            }
            h2{
                text-align: center;
                font-size: 35px;
                color: black;
            }
            h1{
                text-align: center;
                font-size: 50px;
                color: black;
            }
            .col-sm-3{
                padding:40px;
            }
            .img{
                border-radius: 5px;
            }
            .box{
                padding: 80px 120px;
            }
        </style>
    </head>
    <body>
        <?php
        require_once './shared/header.php';
        ?>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="" src="./img/slogan.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></img>
                </div>
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="" src="./img/slogan2.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></img>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="" src="./img/slogan3.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect></img>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">السابق</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">التالي</span>
            </button>
        </div>
        <br>
        <div class="row">      
            <div class="box text-center">
                <h1>História da marca</h1>
                <br>
                <p>
                    A Joalheria Yjewels é reconhecida por sua excelência na criação das mais deslumbrantes joias. 
                    Com um legado de elegância e qualidade incomparáveis, a Yjewels é referência no mundo da alta joalheria. 
                    Cada peça é meticulosamente trabalhada por artesãos habilidosos, utilizando apenas os materiais mais finos e preciosos. 
                    Do design inovador aos detalhes intricados, cada joia da Yjewels conta uma história de beleza e sofisticação. 
                    Seja para ocasiões especiais ou para o uso diário, as joias da Yjewels são verdadeiras obras de arte que transcendem o tempo, 
                    adicionando um toque de glamour e requinte a quem as usa.
                </p>
            </div>
            <br>
            <h1>Joias</h1>
            <div class="col-sm-3">
                <div class="container">
                    <a href="produtosPage.php#aneis" style="text-decoration:none"><img  src="img/aneis/capaAnel.png" width="100%" alt=""/><h2>Anéis</h2></a>
                </div>     
            </div>
            <div class="col-sm-3">
                <div class="container">
                    <a href="produtosPage.php#colares" style="text-decoration:none"><img  src="img/colar/capaColar.png" width="100%" alt=""/><h2>Correntes</h2></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="container">
                    <a href="produtosPage.php#brincos" style="text-decoration:none"><img  src="img/brincos/capaBrinco.png" width="100%" alt=""/><h2>Brincos</h2></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="container">
                    <a href="produtosPage.php#pulseiras" style="text-decoration:none"><img  src="img/pulseira/capaPulseira.png" width="100%" alt=""/><h2>Pulseiras</h2></a>
                </div>
            </div>
    </body>
</html>
