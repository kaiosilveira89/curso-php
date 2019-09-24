<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">

    <title>Exercicio</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização de Exercicios</h2>
    </header>
   
    <nav class="navegacao">
        <a href="#" class="verde">Sem formatacao</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
            <?php 
                include($_GET['dir'] . "/test.php");
            ?>
        </div>
    </main>

    <footer class="rodape">COD3R & Aluno © <?= date("Y"); ?></footer>
</body>

</html>