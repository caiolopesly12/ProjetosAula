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
                    $nas = $_GET['nascimento'];
                    $nom = $_GET['nome'];
                    $end = $_GET['endereco'];
                    $cpf = $_GET['cpf'];
                    $sql = "insert into cliente values ('$cod' , '$nom' , '$nas' , '$end' ,'$cpf')";
                    echo $sql;
                    $con = mysqli_connect("localhost", "root", "", "sus");
                    $stat = mysqli_query($con, $sql);
                } else {
                    
                    
                    
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
                        <input type='hidden' name='op' value='$op'>
                        <button type='submit'>Enviar</button>
                        <button type='reset'>Limpar</button> <br>
                        <button><a href='inicial.html'>Voltar</a></button>
                    </form>
                    </fieldset> 
                    </body>
                    ";
                }
            break;
            case 2 :
                if ($_GET['entrada'] == 1) {
                    echo "
                    <form action='principal.php'  method ='GET'>
                        Código:<input type='number' name='codigo'> 
                        <input type='hidden' name='op' value='$op'>
                        <br>
                        <input type='hidden' name='entrada' value='2'>
                        <button type='submit'>Enviar</button>
                        <button type='reset'>Limpar</button>
                        </form>
                        
                    ";
                } else {
                    $cod = $_GET['codigo'];
                    $sql = "select * from cliente where codigo = $cod";
                    $con = mysqli_connect("localhost", "root", "", "sus");
                    $dados = mysqli_query($con, $sql);
                    $quant = mysqli_num_rows($dados);
                    if($quant > 0) {
                        $linha = mysqli_fetch_array($dados);
                        $cod = $linha['codigo'];
                        $nom = $linha['nome'];
                        $nas = $linha['nascimento'];
                        $end = $linha['endereco'];
                        $cpf = $linha['cpf'];

                        echo "
                            <p>Código: $cod</p>
                            <p>Nome: $nom</p>
                            <p>Nascimento: $nas</p>
                            <p>Endereço: $end</p>
                            <p>CPF: $cpf</p>
                            <button><a href='inicial.html'>Voltar</a></button>
                        ";
                    } else {
                        echo "Nada encontrado";
                    }
            }
            break;
        case 3 :
                    $sql = "select * from cliente";
                    $con = mysqli_connect("localhost", "root", "", "sus");
                    $dados = mysqli_query($con, $sql);
                    $quant = mysqli_num_rows ($dados);
                    if($quant > 0) {
                    for ($i=0 ; $i<$quant ; $i++){
                    $linha = mysqli_fetch_array($dados);
                    $cod = $linha['codigo'];
                    $nom = $linha['nome'];
                    $nas = $linha['nascimento'];
                    $end = $linha['endereco'];
                    $cpf = $linha['cpf'];

                
                echo "
                <fieldset>
                    <legend><h1>Listar o Cliente</h1></legend>
                    <form>
                    Código:$cod 
                    <br>
                    Nome:$nom 
                    <br>
                    Nascimento:$nas 
                    <br>
                    Endereço:$end 
                    <br>
                    Cpf:$cpf
                    <br>
                    <button><a href='inicial.html'>Voltar</a></button>
                    </form>
                </fieldset> 
                
                ";
                }

                }
            }
    ?>
</html>