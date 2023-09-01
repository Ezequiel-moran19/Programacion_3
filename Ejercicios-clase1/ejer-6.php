<?php 

if ($_POST) {
    
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $operador = $_POST['operador'];
    $resultado = 0;
    
    switch ($operador) {
        case '+':
            $resultado= $op1 + $op2;
            echo "La suma es: ". $resultado;
            break;
        case '-':
            $resultado= $op1 - $op2;
            echo "La resta es: ". $resultado;
            break;
        case '*':
            $resultado= $op1 * $op2;
            echo "La multiplicacion es: ". $resultado;
            break;
        case '/':
            if ($op2 != 0) {
                $resultado = $op1 / $op2;
                echo "El resultado de la división es: " . $resultado;
            } else {
                echo "Error: No se puede dividir por cero.";
            }
            break;
        default:
        echo "Operador inválido. Por favor, usa '+', '-', '*' o '/'";
            break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 6</title>
</head>
<body>
    
    <form action="ejer-6bis.php" method="post">
    Primer numero:
    <input type="number" id="op1" name="op1">
    <br><br>
    Operador:
    <select name="operador" id="operador">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br><br>
    Segundo numero:
    <input type="number" id="op2" name="op2">
    <br><br>
    <input type="submit" value="Calcular">
    <br>


    </form>

</body>
</html>