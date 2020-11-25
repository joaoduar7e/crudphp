<?php

session_start();

require 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome =  mysqli_escape_string($connect, $_POST['nome']);

    $sql = "INSERT INTO marca (nome) VALUES ('$nome')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../marca/lista.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../marca/lista.php');
endif;
endif;