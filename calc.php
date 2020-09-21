<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculadoraPHP</title>
</head>
<body>
<form action="proc.php" method="POST" name="calc">
    <label>Introdusca los valores:</label><br><br>
    <input type="text" name="c1"> <br>
    <input type="text" name="c2"> <br><br>
    
    <label>Selecciona la operacion <br><br> <select name="lista">
    <option value="ninguno">Seleccionar</option>
    <option value="sumar">Sumar(+)</option>
    <option value="restar">Restar(-)</option>
    <option value=multiplicar>Multiplicar(*)</option>
    <option value="dividir">Dividir(/)</option>
        </select>
    </label><br><br>
    <input type="submit" value="Ver Resultado">
</form>
</body>
</html>