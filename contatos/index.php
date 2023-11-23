<?php

$conn = new PDO("mysql:host=127.0.0.1;dbname=login", "root", "");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios (nome, , email, senha) VALUES (:nome, , :email, :senha)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":senha", $senha);
$stmt->execute();

header("Location: index.php");

?>




<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João Vitor Fonseca da Silva</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/fav.ico">

    <!-- AREA DE FONTS !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <!-- AREA DE FONTS !-->

  </head>
  <body>
      <div class="BG"> <!-- INICIO BACKGROUND 1 !-->
          <div class="menus">
            <br>
            <br>
            <h1>V I T O R F S C S</h1>
            <ul class="ulmen">
              <a href="../index.html">Inicio</a>
              <a>-</a>
              <a href="#">Contatos</a>
            </ul>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="QUASE-INV">
            <div class="formas" action="" method="POST">
                <br>
                <h1>Criar Conta</h1>
                <form class="formulario">
                    <label>Nome</label>
                    <br>
                    <input type="text" name="nome" class="inv1">
                    <br>
                    <label>Email</label>
                    <br>
                    <input type="email" name="email" class="inv2">
                    <br>
                    <label>Senha</label>
                    <br>
                    <input type="password" name="password" class="inv3">
                    <br>
                    <br>
                    <input type="submit" name="enviar" class="submit">
                </form>
<br>

                <p class="novoaqu"> Novo por aqui? Crie uma conta!</p>

                <br>
                <br>
                <p class="duvidas"> Duvidas? ligue para nossa central (21) 96484-3650</p>
        </div>
          <br>
          </div>
          <br>
          <br>
          <br>
          <br>
        </div> <!-- FINAL BACKGROUND !-->

    </body>
</html>