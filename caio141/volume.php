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
    
</body>
</html>