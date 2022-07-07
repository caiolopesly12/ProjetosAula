<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="php_imc.css">
    <title>Calculo IMC</title>
</head>
<body>
    <?php
    //variaveis
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $nome = $_POST['nome'];
    $imc = $peso / $altura **2;

    //mensagem e imagem para o imc
    if ($imc >=1 &&$imc < 18.5 ) {
        $imcmsg = "Abaixo do peso ";
        $imcimg = "abaixodopeso.png";
        $imcalt = "ryan";
    } 
    elseif ($imc >= 18.5 && $imc < 24.9) {
        $imcmsg = "Peso ideal";
        $imcimg = "Positivo.png";
        $imcalt = "positivo";
    } 
    elseif ($imc >= 25 && $imc <= 29.9) {
        $imcmsg = "Sobrepeso";
        $imcimg = "sobrepeso.png";
        $imcalt = "barriga de chopp";
    } 
    elseif ($imc >= 30 && $imc <= 34.9) {
        $imcmsg = "Obesidade grau I";
        $imcimg = "obesidade1.gif";
        $imcalt = "gordindorj";
    } 
    elseif ($imc >= 35 && $imc <= 39.9) {
        $imcmsg = "Obesidade grau II";
        $imcimg = "obesidade2.gif";
        $imcalt = "o gordinho do rj dançando";
    } 
    elseif ($imc > 40) {
        $imcmsg = "Obesidade grau III";
        $imcimg = "obesidade3.gif";
        $imcalt = "gordão da xj8";
    } 
    //limitador de digitos
    if(strlen($imc) > 4){
     $nimc = substr($imc, 0, 4);
    }
    else{
     $nimc= $imc;
    }
    ?> 
    <h1>
    <?php
    //menssagem final
        echo"  $nome seu imc é $nimc ($imcmsg) "
    ?>
    </h1>
    <figure>
    <?php
        echo "<img src='$imcimg' alt='$imcalt' />";
    ?>
    </figure>
</body>
</html>