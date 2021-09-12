<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo8",'root','');


    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Jailton', sobrenome ='de Lira' WHERE id=2");


    $sql->execute();
    echo "atualizado";