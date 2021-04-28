<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
</head>
<body>
    <form method="GET" action="calc.php">
        <input type="text" name="n1" pattern="[0-9.,]{1,}" />
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="n2" pattern="[0-9.,]{1,}" />
        <input type="submit" value="Calcular"/>
    </form>
</body>
</html>