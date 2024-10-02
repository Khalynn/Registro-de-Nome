<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['nome'])) {
        $_SESSION['nome'] = htmlspecialchars($_GET['nome']);
        header("Location: nome_salvo.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Preenchimento de Nome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $pg_atual = 'primeira';
        include("navbar.php");
    ?>
    <div class='container-fluid my-container-nome'>
        <h1>Sessão de Usuário</h1>
        
        <form method="get" action="primeira.php">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" required class=".form-control-sm"><br>

            <input type="submit" value="Confirmar" class="btn btn-primary">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
