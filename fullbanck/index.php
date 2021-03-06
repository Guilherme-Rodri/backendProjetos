<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles-global.css">
</head>
<body>
    <h1>Aumento Salarial</h1>
    <form method="GET" action="salarioFuncionario.php">
    <div class="input-group"> 
        <label for="funcionario"></label>
        <input type="text" id="funcionario" name="funcionario" placeholder="Funcionário" required>
    </div>
    <div class="input-group">
    <label for="salario"></label>
    <input type="number" id="salario" name="salario" min="900.00" placeholder="Salário" required>
    </div>
    <button>Enviar</button>
   
    </form>
</body>
</html>