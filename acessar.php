<?php
require_once 'php_action/db_connect.php'; //conexão ao banco de dados

if(isset($_POST['acessar']))://qnd clicar em login

    session_start();
    $pass = mysqli_escape_string($connect, $_POST['senhal']); //define senhal como valor da váriavel $pass
    $nome = mysqli_escape_string($connect, $_POST['nomel']); // //     nomel   //    //  //   //     $nome
    // compara os campos digitados com os dados do banco de dados

    $verif = "SELECT * FROM logins WHERE nome = '$nome' && senha = '$pass'";
    $res = mysqli_query($connect, $verif); //gera um resultado ao comando acima (0 para não ou 1 para sim)

    // Verifica se encontrou algum registro e encaminha para a home se for o caso, do contrário volta para a tela de login
    if (mysqli_num_rows($res) > 0) {
        $_SESSION['nomel'] = $nome;
        $_SESSION['senhal'] = $pass;
        header('Location: usuarios/home.php');
    } else {
        unset($_SESSION['nomel']);
        unset($_SESSION['senhal']);
        header('Location: index.php');
    }
endif;
?>