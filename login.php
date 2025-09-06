<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';


    $validUser = "admin";
    $validPassword = "1234";


    if ($username === $$validUser && $password === $validPassword) {
        echo "ok";
    } else {
        echo "error";
    }
} else {
    // Si alguien accede directo al archivo sin POST
    echo "Método no permitido";
}
?>
