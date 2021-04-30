<h2>Calculadora de Imposto</h2>
<form method="POST" > 
Valor do Produto:</br>
<input type="number" name="valor" /></br></br>
Taxa do imposto (em %)</br>
<input type="number" name="imposto"/></br></br>
<input type="submit" value="Calcular" />
</form>
<?php 
if(!empty($_POST['valor']) && !empty($_POST['imposto'])) {
    $valorTotal = intval($_POST['valor']);
    $imposto = intval($_POST['imposto']);
    $taxaImposto = $imposto."%";
    function porcentagem( $imposto, $valorTotal ) {
        return ($imposto / 100) * $valorTotal;
    }
    function produto($valorTotal, $imposto) {
        return $valorTotal - ($imposto /100) * $valorTotal;
    }
    if($valorTotal && $imposto) {
    echo "Valor do produto R$ ".$valorTotal."</br>";
    echo "Taxa de imposto: ".$taxaImposto."</br>";
    echo "<hr>"."</br>";
    echo "Imposto: R$".porcentagem($imposto, $valorTotal)."</br>";
    echo "Produto: R$".produto($valorTotal, $imposto);
    }
}
?>
