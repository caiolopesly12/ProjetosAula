<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
       $op = $_GET['op'];
       switch ($op) {
            case 1 :
                if (isset($_GET['enviado'])) {
                    $cod = $_GET['codigo'];
                    echo"$cod <br>
                    Cadastro enviado com sucesso!
                    ";
                    $nom = $_GET['nascimento'];
                    $end = $_GET['endereco'];
                    $cpf = $_GET['cpf'];
                } else {
                    
                    $sql = "insert into clienete values ('codigo' , 'nome' , 'nascimento' , 'endereco' ,'cpf'" 
                    echo $sql;
                    $con = msqli_connect("127.0.0.1")
                    $stat = msqli_query($con, $sql)
                    if($stat = true){
                echo "
                    <fieldset>
                    <legend><h1>Iniciar o Cliente</h1></legend>
                    <form action='principal.php'  method ='GET'>
                        Código: <input type ='number' name ='codigo'>
                        <br> 
                        Nome: <input type ='text' name ='nome'>
                        <br>
                        Nascimento: <input type ='date' name ='nascimento'>
                        <br>
                        Endereço: <input type ='text' name ='endereco'>
                        <br>
                        Cpf: <input type ='number' name ='cpf'>
                        <br>   
                        <input type='hidden' name='enviado' value='s'>
                        <input type='hidden' name='op' value='1'>
                        <button type='submit'>Enviar</button>
                        <button type='reset'>Limpar</button>
                    </form>
                    </fieldset> 
                    </body>
                    ";
                }
            break;
            }
            case 2 :
              

            break;

    ?>
</html>