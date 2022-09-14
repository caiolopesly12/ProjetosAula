<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php 
        if (isset($_GET['option'])) {
            echo "";
        } else {
            echo "<title>Nenhuma opção escolhida!</title>";
            echo "<h1>Nenhuma opção escolhida!</h1>";
        }
        $option = $_GET['option'];
        switch ($option) {
            case "triangulo":
                $titulo = "Calcular área do triângulo";
                break;
            case 'piramide':
                $titulo = 'Calcular volume da pirâmide';
                break;
            case 'esfera':
                $titulo = 'Calcular volume da esfera';
                break;
            }
        echo "<title>$titulo</title>"
    ?>
</head>
<body>
    <?php
     <fieldset class="form">
        <legend><h1>Cálculo Volume da piramide Base Quadrada</h1></legend>
        <form action="calculo.php" method="get">
        Lado<input type="text" name="option1" value="Lado">
        <br>
        Altura<input type="text" name="option2" value="altura">
        <br>
        <button type="submit">Enviar</button>
     </form>
    </fieldset>
    ?>
    <?php
    <fieldset class="form">
        <legend><h1>Cálculo Volume da piramide Base Quadrada</h1></legend>
        <form action="calculo.php" method="get">
        Lado<input type="text" name="option1" value="lado">
        <br>
        Altura<input type="text" name="option2" value="altura">
        <br>
        <button type="submit">Enviar</button>
        </form>
    </fieldset>
    ?>
    <?php
    <fieldset class="form">
        <legend><h1>Cálculo Volume da Esfera</h1></legend>
        <form action="calculo.php" method="get">
        Raio<input type="text" name="option1" value="lado">
        <br>
        <button type="submit">Enviar</button>
        </form>
    </fieldset
    ?>
    
    </form>
    
</body>
</html>