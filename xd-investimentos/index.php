<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles-global.css">
</head>
<body>

  <form action="calculoMoedas.php" method="GET">
    <div class="input-group">
    <label for=""><h1> Conversão de valores</h1></label>
    <input type="number" name="moedaReal" step="1" min="0" placeholder="Digite aqui no formato de moeda Real" required/>
    </div>
    <div>
      <label for=""> <h1>Selecione o tipo de conversão</h1> </label>
    </div>

    <div >
    
    <input type="radio" name="Moeda" value="D" id="dolar"/>
    <label for="dolar">$Dolar</label>
    </div>

    <div >
   
    <input type="radio" name="Moeda" value="E" id="euro"/>
    <label for="euro">£Euro </label>
    </div>

    <button>Enviar</button>
    <button type="reset">Limpar</button>
  </form>
    
</body>
</html>