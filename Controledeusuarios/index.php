<?php
require 'config.php'
?>
<a href="adicionar.php">Adicionar novo Usuario</a>
<table border="0" width="100%">
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Acoes</th>
  
  </tr>
  <?php
  $sql = "SELECT * FROM usuarios";
  $sql = $pdo->query($sql);
  if($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $usuario) {
        echo '<tr>';
        echo '<td>'.$usuario['nome'].'</td>';
        echo '<td>'.$usuario['email'].'</td>';
        echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
        echo '</tr>';
    } 
  }
  ?>

</table>
































<?php

// $dsn = "mysql:dbname=blog;host=127.0.0.1";
// $dbuser = "root";
// $dbpass = "";

// try {
//    $pdo = new PDO($dsn, $dbuser, $dbpass);

//    $nome = 'Pedro';
//    $id = 5;

//    $sql = "UPDATE usuarios SET nome = :nome WHERE id = :id";
//    $sql = $pdo->prepare($sql);
//    $sql->bindValue(':nome', $nome);
//    $sql->bindValue(':id', $id);
//    $sql->execute();

//    echo "Usuario atualizado com sucesso! ";

// } catch(PDOException $e) {
//   echo "Falhou: ".$e->getMessage();
// }
?>
