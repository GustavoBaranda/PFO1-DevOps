<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    $userValid = "admin";
    $passwordValid = "1234";

    if ($username === $userValid && $password === $passwordValid) {
        echo "ok";
    } else {
        echo "error";
    }
} else {
    // Si alguien accede directo al archivo sin POST
    echo "Método no permitido";
}
?>
