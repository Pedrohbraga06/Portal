<?php
try {
  $pdo = new PDO("mysql:dbname=projetoordenacao;host=localhost", "root","");
} catch(PDOException $e) {
  echo "ERRO: ".$e->getMessage();
  exit;
}
?>
<table border="1" width="400">
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <?php
  $sql = "SELECT * FROM usuarios";
  $sql = $pdo->query($sql);
  if($sql->rowCount() > 0){

    foreach ($sql ->fetchAll() as $usuario): 
      ?>
      <tr>
        <td><?php echo $usuario['nome']; ?></td>
        <td><?php echo $usuario['idade']; ?></td>
      </tr>


      
      
      <?php
      endforeach;
      
  }
  ?>
</table>