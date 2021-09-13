<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo8",'root','');


    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");


    if(isset($_POST['acao'])){
        $id = $_POST['id'];
        $sql->execute(array($id));
        echo "Deletado";
    };
   
    ?>
     <form method="post">
        <input type="text" name="id" required>
        <input type="submit" name="acao" value="enviar">
    </form>