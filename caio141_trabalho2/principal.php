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
                if($_GET['entrada'] == 1) {
                    echo "
                    <fieldset>
                    <legend><h1>Incluir medicamento</h1></legend>
                    <form action='principal.php'  method ='GET'>
                        Código: <input type ='number' name ='codigo'>
                        <br> 
                        Nome: <input type ='text' name ='nome'>
                        <br>
                        Descrição: <input type ='text' name ='descricao'>
                        <br>
                        Preço: <input type ='number' name ='preco'>
                        <br> 
                        Fornecedor: <input type ='text' name ='fornecedor'>
                        <br> 
                        Quantidade: <input type ='number' name ='quantidade'>
                        <br>
                        <button type='submit'>Enviar</button>
                        <button type='reset'>Limpar</button>
                        <br>
                        <input type='hidden' name='entrada' value='2'>
                        <input type='hidden' name='op' value='$op'>
                        <button><a href='inicial.html'>Voltar</a></button>
                    </form>
                    </fieldset> 
                    </body>
                    ";
                } else {
                    $cod = $_GET['codigo'];
                    $nom = $_GET['nome'];
                    $des = $_GET['descricao'];
                    $prec = $_GET['preco'];
                    $for = $_GET['fornecedor'];
                    $quant = $_GET['quantidade'];
                    
                    $sql = "select * from medicamentos where codigo='$cod'";
                    $con = mysqli_connect("localhost", "root", "", "ifarmacia");
                    $stat = mysqli_query($con, $sql); 
                    $quantidade = mysqli_num_rows($stat);

                    if ($quantidade > 0) {
                        echo "Já existe um produto com o mesmo código!";
                    } else {
                        $sql = "insert into medicamentos values ('$cod' , '$nom' , '$des' , '$prec' ,'$for', '$quant')";
                        $con = mysqli_connect("localhost", "root", "", "ifarmacia");
                        $stat = mysqli_query($con, $sql); 
                        echo "Produto cadastrado!" ; 
                    }
                     
                }
            break;
            case 2 :
                if ($_GET['entrada'] == 1) {
                    echo "
                    <fieldset>
                    <legend><h1>Insira o medicamento que queira pesquisar</h1></legend>
                    <form action='principal.php'  method ='GET'>
                        Nome:<input type='text' name='nome'> 
                        <input type='hidden' name='op' value='$op'>
                        <br>
                        <input type='hidden' name='entrada' value='2'>
                        <button type='submit'>Enviar</button>
                        <button type='reset'>Limpar</button>
                        <br>
                        <button><a href='inicial.html'>Voltar</a></button>
                        </form>
                        </fieldset>
                        
                    ";
                } else {
                    $nom = $_GET['nome'];
                    $sql = "select * from medicamentos where nome = '$nom'";
                    $con = mysqli_connect("localhost", "root", "", "ifarmacia");
                    $dados = mysqli_query($con, $sql); 
                    $quant = mysqli_num_rows($dados);
                    if($quant > 0) {
                        $linha = mysqli_fetch_array($dados);
                        $cod = $linha['codigo'];
                        $nom = $linha['nome'];
                        $des = $linha['descricao'];
                        $prec = $linha['preco'];
                        $for = $linha['fornecedor'];
                        $quant = $linha['quantidade'];

                        echo "
                            <p>Código: $cod</p>
                            <p>Nome: $nom</p>
                            <p>Descrição: $des</p>
                            <p>Preço: $prec</p>
                            <p>Fornecedor: $for</p>
                            <p>Quantidade: $quant</p>
                            <button><a href='inicial.html'>Voltar</a></button>
                        ";
                    } else {
                        echo "Nada encontrado";
                    }
            }
            break;
        case 3 :
                    $sql = "select * from medicamentos";
                    $con = mysqli_connect("localhost", "root", "", "ifarmacia");
                    $dados = mysqli_query($con, $sql);
                    $quant = mysqli_num_rows ($dados);
                    if($quant > 0) {
                    for ($i=0 ; $i<$quant ; $i++){
                    $linha = mysqli_fetch_array($dados);
                    $cod = $linha['codigo'];
                    $nom = $linha['nome'];
                    $des = $linha['descricao'];
                    $prec = $linha['preco'];
                    $for = $linha['fornecedor'];
                    $quanti = $linha['quantidade'];
                
                echo "
                    Código:$cod 
                    <br>
                    Nome:$nom 
                    <br>
                    Descrição:$des
                    <br>
                    Preço:$prec
                    <br>
                    Fornecedor:$for
                    <br>
                    Quantidade: $quanti
                    <hr>
                ";
                
                }
                echo "
                <button><a href='inicial.html'>Voltar</a></button>
                ";
            }   
            break;
        case 4 :
            if($_GET['entrada'] == 1) {
                        
                echo "
                    <form>
                    <fieldset>
                    <legend><h1>Insira o medicamento que queira excluir</h1></legend>
                    <label for='nome'>Nome:</label>
                    <input type='text' name='nome'>
                    <input type='hidden' name='op' value='$op'> 
                    <input type='hidden' name='entrada' value='2'> 
                    <br>
                    <button type='submit'>Enviar</button>
                    <button type='reset'>Limpar</button>
                    <br>
                    <button><a href='inicial.html'>Voltar</a></button>
                    </form>
                    </fieldset>
                    
                    
                ";
                } elseif($_GET['entrada'] == 2) {
                    $nom = $_GET['nome'];
                    $sql = "select * from medicamentos where nome = '$nom'";        
                    $con = mysqli_connect("localhost", "root", "", "ifarmacia");
                    $dados = mysqli_query($con, $sql);
                    $quantidade = mysqli_num_rows($dados);

                    if($quantidade > 0) {
                        $linha = mysqli_fetch_array($dados);
                        $cod = $linha['codigo'];
                        $nom = $linha['nome'];
                        $des = $linha['descricao'];
                        $prec = $linha['preco'];
                        $for = $linha['fornecedor'];
                        $quanti = $linha['quantidade'];
        
                        echo "
                            <form>
                            <fieldset>
                            <legend><h1>Medicamento encontrado!</h1></legend>
                            Código:$cod 
                            <br>
                            Nome:$nom 
                            <br>
                            Descrição:$des
                            <br>
                            Preço:$prec
                            <br>
                            Fornecedor:$for
                            <br>
                            Quantidade: $quanti
                            <br>
                            <br>
                            <p>Tem certeza que deseja excluir este medicamento?</p>
    
                            <input type='radio' name='escolha' value='1'>Sim
                            <input type='radio' name='escolha' value='2'>Não
    
                            <br>

                            <input type='hidden' name='op' value='$op'> 
                            <input type='hidden' name='entrada' value='3'>
                            <input type='hidden' name='nome' value='$nom'>

                            <button type='submit'>Enviar</button>
                            <button type='reset'>Limpar</button> <br>
                            <button><a href='inicial.html'>Voltar</a></button>
                            </fieldset>
                            </form>    
                            
                            
                         
                        ";
                }  else {
                    echo "
                        <p>Código de medicamento não encontrado</p>
                    ";
                }
            }
            if ($_GET['entrada'] == 3) {
                
                    $nom = $_GET['nome'];
                    $escolha = $_GET ['escolha'];
        
                    if ($escolha == 2) {
                    header("Location: principal.php?op=4&entrada=1"); 
                    exit();
                }
                
                    $sql = "DELETE FROM medicamentos WHERE nome = '$nom'";
                    $con = mysqli_connect("localhost", "root", "", "ifarmacia");
                    $status = mysqli_query($con, $sql);
        
                    if($status = true) {
                    echo" REGISTRO EXCLUIDO COM SUCESSO!! <br>
                    <button><a href='inicial.html'>Voltar</a></button> ";
                }   else {
                    echo" HOUVE UM ERRO AO TENTAR EXCLUIR OS DADOS! (Verifique o sql) <br>
                    <button><a href='inicial.html'>Voltar</a></button> ";
                }
            
            }
            break;     
            case 5 :
                if($_GET['entrada'] == 1) {
                            
                    echo "
                        <form>
                        <fieldset>
                        <legend><h1>Insira o medicamento que queira alterar</h1></legend>
                        <label for='nome'>Nome:</label>
                        <input type='text' name='nome'>
                        <input type='hidden' name='op' value='$op'> 
                        <input type='hidden' name='entrada' value='2'> 
                        <br>
                        <button type='submit'>Enviar</button>
                        <button type='reset'>Limpar</button>
                        <br>
                        <button><a href='inicial.html'>Voltar</a></button>
                        </form>
                        </fieldset>
                        
                    ";
                    } elseif($_GET['entrada'] == 2) {
                        $nom = $_GET['nome'];
                        $sql = "select * from medicamentos where nome = '$nom'";
                        $con = mysqli_connect("localhost", "root", "", "ifarmacia");
                        $dados = mysqli_query($con, $sql);
                        $quantidade = mysqli_num_rows($dados);
    
                        if($quantidade > 0) {
                            $linha = mysqli_fetch_array($dados);  
                            $cod =  $linha['codigo'];
                            $nom =  $linha['nome'];
                            $des =  $linha['descricao'];
                            $prec =  $linha['preco'];
                            $for =  $linha['fornecedor'];
                            $quanti = $linha['quantidade'];
                            echo "
                            <form>
                            <fieldset>
                                <legend><h1>Alterar cliente</h1></legend>
                                Código: $cod 
                                <br> 
                                Nome: <input type ='text' name ='nome' value='$nom'>
                                <br>
                                Descrição: <input type ='text' name ='descricao' value='$des'>
                                <br>
                                Preço: <input type ='number' name ='preco' value='$prec'>
                                <br> 
                                Fornecedor: <input type ='text' name ='fornecedor' value='$for'>
                                <br> 
                                Quantidade: <input type ='number' name ='quantidade'  value='$quanti'>
                                <br>
        
                                <button type='submit'>Enviar</button>
                                <br>
                                <button><a href='inicial.html'>Voltar</a></button>

                                
                                <input type=hidden name=op value=$op> 
                                <input type=hidden name=entrada value=3>
                                <input type=hidden name=codigo value=$cod>
                                </form>
                                </fieldset>
                            ";
                        }
                    } elseif ($_GET['entrada'] == 3) {
                        $cod = $_GET['codigo'];
                        $nom = $_GET['nome'];
                        $des = $_GET['descricao'];
                        $prec = $_GET['preco'];
                        $for = $_GET['fornecedor'];
                        $quanti = $_GET['quantidade'];

                        $sql = "update medicamentos set nome ='$nom', descricao = '$des', preco = '$prec', fornecedor = '$for', quantidade = '$quanti'  where codigo ='$cod'";
                        $con = mysqli_connect("localhost", "root", "", "ifarmacia");
                        $stat = mysqli_query($con, $sql);
                        echo "Dados alterados";
                    }
            

    } 
    ?>
</html>