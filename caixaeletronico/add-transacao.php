<?php
session_start();
require 'config.php';
if (isset($_POST['tipo'])) {
  $tipo = $_POST['tipo'];
  $valor = str_replace(",",".", $_POSt['valor']);
  $valor = floatval($valor);

  $sql = $pdo->prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao) VALUES (:id_conta, :tipo, :valor, NOW())");
  $sql ->bindValue(":id_conta", $_SESSION['banco']);
  $sql ->bindValue(":tipo", $tipo);
  $sql ->bindValue(":valor",$valor);
  $sql ->execute();

  if ($tipo == '0') {
    // Depósito
    $sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
    $sql ->bindValue(":valor",$valor);
    $sql ->bindValue(":id", $_SESSION['banco']);
    $sql ->execute();

  } else {
    // saque
    $sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
    $sql ->bindValue(":valor",$valor);
    $sql ->bindValue(":id", $_SESSION['banco']);
    $sql ->execute();
  }

  header("Location: index.php");
  exit;

}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Caixa Eletronico</title>
 </head>
 <body>
    <form method="POST">
      Tipo de transacao:</br>
      <select name="tipo">
       <option value="0">Deposito</option>
       <option value="1">Retirada</option>
      </select></br></br>

      valor:</br>
      <input type="text" name="valor" pattern="[0-9.,]{1,}"/></br></br>

      <input type="submit" value="Adicionar"/>
    </form>
</body>
</html>