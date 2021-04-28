<?php
$n1 = addslashes($_GET['n1']);
$n2 = addslashes($_GET['n2']);
$op = addslashes($_GET['op']);
//Passando os números para float
$n1 = floatval(str_replace(",",".", str_replace(".","", $n1)));
$n2 = floatval(str_replace(",",".", str_replace(".","", $n2)));
//Verificando se os valores passados foram setados, se não estão em 'branco' e se são numéricos
if((!isset($n1) || $n1=="" ) || (!isset($n2) || $n2=="" ) || (!is_numeric($n1) || !is_numeric($n2))){
    header('Location:index.php');
    exit;
}
switch ($op) {
    case '+':
        $result = $n1 + $n2;
        break;
    case '-':
        $result = $n1 - $n2;
        break;
    case '*':        
        $result = $n1 * $n2;
        break;
    case '/':
        if($n1 == 0 && $n2 == 0){
            $result = "Resultado indefinido!";
            break;
        } elseif ($n2 == 0){
            $result = "Impossível divisão por zero!";
            break;
        }
        $result = $n1 / $n2;
        break;    
}
//voltando os dados para formato brasileiro
$n1 = number_format($n1,2,",",".");
$n2 = number_format($n2,2,",",".");
$result = is_float($result) ? number_format($result,2,",","."):$result;
echo $n1." ".$op." ".$n2." = ".$result;
echo "<br/><br/> <a href='index.php'>Voltar</a>";
?>