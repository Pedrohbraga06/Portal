<html>
<form method="post">
 <input type="text" name="campo"/>
 <input type="submit"/>
</form>
</html>

<?php
 if(isset($_POST['campo'])){
 $campo = $_POST['campo'];

 echo "<hr>";

 echo "<b>digitado: </b>";
 echo "<l style='color:blue'>".$campo."</l><br><br>";

 echo "<hr>";

 echo "<pre>";
 $array = explode(',',$campo);
 print_r($array);
 echo "</pre>";

 echo "<hr>";

 foreach ($array as $key => $value) {
 if($value == "um"){
 echo "1";
 }elseif($value == "dois"){
 echo "2";
 }elseif($value == "tres"){
 echo "3";
 }elseif($value == "quatro"){
 echo "4";
 }
 elseif($value == "cinco"){
 echo "5";
 }
 elseif($value == "seis"){
 echo "6";
 }
 elseif($value == "sete"){
 echo "7";
 }
 elseif($value == "oito"){
 echo "8";
 }elseif($value == "nove"){
 echo "9";
 }elseif($value == "zero"){
 echo "0";
 }
 
 }

 }
?>