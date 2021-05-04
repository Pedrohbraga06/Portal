<h1>Substituidor</h1>
<form method="post">
 Frase:<br/>
 <input type="text" name="frase" /><br/><br/>
 Procurar por:<br/>
 <input type="text" name="find" /><br/><br/>
 Trocar por:<br/>
 <input type="text" name="sub" /><br/><br/>
 <input type="submit" value="Trocar">
</form>
<?php
$frase = filter_input(INPUT_POST, 'frase');
$find = filter_input(INPUT_POST, 'find');
$sub = filter_input(INPUT_POST, 'sub');
$frase_final = [];
if($frase && $find && $sub) {
 $frase_final = explode(" ",$frase);
 $f = str_replace($find, $sub, $frase_final);
 $frase_final = implode(" ", $f);
 echo 'Frase : '.$frase;
 echo '<br/>';
 echo 'Nova frase: '.$frase_final;
} ?>