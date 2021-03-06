<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seneletro</title>
    <link rel="stylesheet" href="./styles-global.css">
</head>
<body>
    <form action="contadeluz.php" method="GET">
   <h1 style="color: blue;">Seneletro</h1> 

    <label for=""><h1>Campo do nome</h1></label>
    <input type="text" name="nome_completo" id="nome" placeholder="Ex: José da Silva Albuquerque" required/>
    <label for=""><h1>Campo do endereço</h1></label>
    <input type="text" id="endereco" name="endereco" placeholder="Ex: Rua Presidente Silva Costa, 735" required/>
    <label for=""><h1> Quantidade de consumo </h1></label>
    <input type="number" id="consumo" step="5" min="0" name="consumo" placeholder="Ex: 200kWh" required/>

    <button>Enviar</button>
    </form>
    
</body>
</html>