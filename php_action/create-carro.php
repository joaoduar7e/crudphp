<?php

session_start();

require 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):

    $nome =  mysqli_escape_string($connect, $_POST['nome']);
    $marca =  mysqli_escape_string($connect, $_POST['marca']);
    $ano =  mysqli_escape_string($connect, $_POST['ano']);

    $sql = "INSERT INTO carro (nome, marca, ano) VALUES ('$nome', '$marca', '$ano')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../carro/lista.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../carro/lista.php');
endif;
endif;