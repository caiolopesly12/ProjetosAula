<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Document</title>
</head>
<body>
    <?php
    $nom = $_GET['nome'];
    $end = $_GET['endereco'];
    $nas = $_GET['nascimento'];
    $sex = $_GET['sexo'];
    if (isset($_GET['h1'])){
        $h1 = $_GET['h1'];
    } 
    if (isset($_GET['h2'])){
        $h2 = $_GET['h2'];
    }
    if (isset($_GET['h3'])){
        $h3 = $_GET['h3'];
    }
    $uni = $_GET['uf'];
    $obs = $_GET['observacoes'];
    
   
   

    


?>
    <fieldset class="form2">
  <legend><h1> DADOS RECEBIDOS: </h1></legend>
  <?php  echo"\nNOME: $nom <br>";
    echo "\nENDEREÇO: $end <br>";
    echo "\nNASCIMENTO: $nas <br>";
    echo "\nSEXO: $sex <br>";
    echo "\nHOBBY: $h1 $h2 $h3 <br>";
    echo "\nUNIDADE FEDERATIVA: $uni <br>";
    echo "\nOBSERVAÇÕES: $obs <br>";
    ?>
</fieldset>

</body>
</html>



