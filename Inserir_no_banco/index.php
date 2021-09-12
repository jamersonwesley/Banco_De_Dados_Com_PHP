<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo8",'root','');

    if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento = $_POST['momento'];

    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (NULL,?,?,?)");


    $sql->execute(array($nome,$sobrenome,$momento));
    echo "Inserido";
    }

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" required>
        <input type="text" name="sobrenome" required>
        <input type="datetime-local" name="momento">
        <input type="submit" name="acao" value="enviar">
    </form>
</body>
</html>