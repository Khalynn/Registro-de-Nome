<?php
    // Inicia a sessão
    session_start();

    // Destrói todas as variáveis de sessão
    $_SESSION = [];

    // Remove o cookie de sessão, se existir
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 42000, '/');
    }
    // Destrói a sessão
    session_destroy();

    // Redireciona para a página inicial (primeira.php)
    header("Location: primeira.php");
    exit;
?>
