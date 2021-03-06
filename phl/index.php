<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phl</title>
    <link rel="stylesheet" href='styles-global.css'/>
</head>

<body>
    <form method="GET" action="calcula-frete.php">
         <div class="input-group">
         <label ><h1> Cidade de origem </h1></label>
         <input type="text" name="cidadeOrigem" placeholder="Digite a cidade origem" required  />
  
         <label><h1> Destino</h1> </label>
         <input type="text" name="cidadeDestino" placeholder="Digite a cidade de destino " required/>

         <label ><h1>Pedágios a pagar</h1></label>
         <input type="number" step="1" min="0" name="pedagio" placeholder="Pedágios" required/>

         <label ><h1>Distância a se percorrer</h1></label>
         <input type="number" step="1" min="0" name="distancia" placeholder="Km" required/>

         <button>Enviar</button>
         <button type="reset">Limpar</button>
         </div>
    </form>
</body>

</html>