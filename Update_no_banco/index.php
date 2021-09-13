<?php
    $pdo = new PDO("mysql:host=localhost;dbname=modulo8",'root','');


   



    if(isset($_POST['acao'])){
        $id = $_POST['id'];
        $sobrenome = $_POST['sobrenome'];
        $nome = $_POST['nome'];
        $sql = $pdo->prepare("UPDATE `clientes` SET nome='$nome', sobrenome ='$sobrenome' WHERE id=?");
      
        $sql->execute(array($id));
        echo "Atualizado";
    };

    ?>
     <form method="post">
     <input type="text" name="nome" required>
     <input type="text" name="sobrenome" required>
     <input type="text" name="id" required>
     <input type="submit" name="acao" value="enviar">
    </form>