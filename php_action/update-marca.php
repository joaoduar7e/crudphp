
<?php
//Inicia a Sessão
session_start();
//Chama a conexão
require 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE marca SET nome = '$nome' WHERE id = '$id'";

    
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../marca/lista.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../marca/lista.php');
       
    endif;

endif;
