<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Ordenar números</title>
</head>
<body>
 <h1>Ordenador de números</h1>
 <form action="" method="post">
 Digite os números: <br>
 <input type="text" name="numero" id=""><br>
 <input type="submit" value="Enviar">
 </form>

 <?php
 if(isset($_POST['numero']) && empty($_POST['numero']) == false){
 $nums = $_POST['numero'];

 $array = str_split($nums);
 sort($array);
 
 echo "Numeros ordenados: <br>";
 foreach ($array as $val) {
 print_r($val." ");
 }
 }

 ?>
</body>
</html>