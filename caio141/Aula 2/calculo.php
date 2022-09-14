<html lang="pt-br.">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $option = $GET['option']
       $option1 = $GET['option1']
       $option2 = $GET['option2']
       

       switch ($option) {
            case "triangulo" :
                echo "<p> Lado: $option1</p>";
                echo "<p> Altura: $option2</p>";
                $resultado = ($option1 * $option2) / 2;
                echo "<p> Área: $resultado</p>";
                break;
            case "piramide" :
                echo "<p> Lado: $option1</p>";
                echo "<p> Altura: $option2</p>";
                $resultado = ($option1 * $option2) / 3;
                echo "<p> Volume: $resultado</p>";
                break;
            case "esfera"
                echo "<p> Raio: $option1</p> ";
                $resultado = ($option1 * 4 ) / 3;
                echo "<p> Volume: $resultado</p>"
       }




    ?>
</body>
</html>