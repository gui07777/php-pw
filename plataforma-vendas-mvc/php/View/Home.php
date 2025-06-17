<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <!-- estilização do cabeçalho -->
     <link rel="stylesheet" type="text/css" href="./../../css/container-layout/cabecalho.css">
     <!-- estilizacao do carrossel -->
     <link rel="stylesheet" type="text/css" href="./../../css/componentes/carrossel.css">

</head>
<body>
    <!-- cabeçalho -->
    <?php
        include '../view/Cabecalho.php'
    ?>
    <main class="container-principal">
        <div class="carrossel">
            <div class="slides">
                <img src="./../../src/images/destaques/pastilha.jfif" alt="Pastilha de freios Gol 1996-01">
                <img src="./../../src/images/destaques/mocinetica.jfif" alt="Homocinética">
                <img src="./../../src/images/destaques/parabrisa.jfif" alt="Parabrisa">
                <img src="./../../src/images/destaques/gol.jfif" alt="Bico Injetor Gol 1996-01">
            </div>
            <button class="prev" onclick="mudarSlide(-1)"></button>
            <button class="next" onclick="mudarSlide(1)"></button>
        </div>
    </main>
    <!-- rodape -->
     <script src="./../../js/carrossel.js"></script>
</body>
</html>