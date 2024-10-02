<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Nome Salvo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style> a.my_a {margin-left: 550px; text-decoration: none;} </style>
</head>
<body>
    <!-- Localização da página -->
    <?php
        $pg_atual = 'nome_salvo';
        include ("navbar.php");
    ?>

    <!-- Container para mostrar o nome -->
    <div class='container-fluid my-container-nome'>
        <h1>Nome Salvo na Sessão:</h1>

    <?php
        if (isset($_SESSION['nome'])) {
            echo "O nome salvo na sessão é: <strong>" . htmlspecialchars($_SESSION['nome']) . "</strong></p>";
        } else {
            echo "<p>Não há nome salvo na sessão.</p>";
        }
    ?>
    </div>

    <br>
    <a class="my_a" href="primeira.php">Voltar</a>
    <br>
    <a class="my_a" href="logout.php">Encerrar Sessão</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
