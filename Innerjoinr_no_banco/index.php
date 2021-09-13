<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo8','root','');

$sql = $pdo->prepare('SELECT * FROM `clientes` INNER JOIN `posts` ON `id_conteudo` = `clientes`.`id` ');

$sql->execute();

$info = $sql->fetchAll();

echo "<pre>";
print_r($info);
echo "<pre>";
?>