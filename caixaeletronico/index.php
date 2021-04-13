<?php
session_start();
if (isset($_SESSION['banco']) && empty($_SESSION['banco']) == false)  {
  
}else {
  header("Location: login.php");
  exit;
}
?>

<html>
 <head>
  <title>Caixa Eletronico</title>
 </head>
 <body>
    <h1>Banco XYZ</h1>
    Agencia: 0000<br/>
    Conta: 0000<br/>
    <a href="sair.php"></a>
</body>
</html>