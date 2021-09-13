<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo8','root','');

$sql = $pdo->prepare('SELECT * FROM `clientes`');

$sql->execute();

$info = $sql->fetchAll();


foreach($info as $key => $value){
    echo   "<br>";
    echo "nome =".$value['nome'];
    echo   "<br>";
    echo "sobrenome=".$value['sobrenome'];
}

?>