<?php
session_start();

$n1 = rand(0, 10);
$n2 = rand(0, 10);

$_SESSION['v'] = $n1 + $n2;

?>
<h2>Verificador de Humanos</h2>

<form method="POST" action="verificador.php">

<?php echo $n1; ?> + <?php echo $n2; ?> =

  <input type="number" name="n" />

  <input type="submit" value="verificar" />

</form>