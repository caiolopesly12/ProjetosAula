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
            echo "
            <fieldset>
            <legend><h1>Iniciar o Cliente</h1></legend>
            <form action='calculo.php'  method ='GET'>
                Código: <input type ='number' name ='codigo'>
                <br> 
                Nome: <input type ='text' name ='nome'>
                <br>
                Nascimento: <input type ='date' name ='nasciemnto'>
                <br>
                Endereço: <input type ='text' name ='enedereco'>
                <br>
                Cpf: <input type ='number' name ='cpf'>
                <br>  
                <input type = hidden name =op value= $op>     
                <button type='submit'>Enviar</button>
                <button type='reset'>Limpar</button>
            </form>
            </fieldset> 
            </body>
            ";
           
            break;
        case 2 :
            echo "
            <fieldset>
            <legend><h1>Pesquisar o Cliente</h1></legend>
            <form action='calculo.php'  method ='GET'>
                Código: <input type ='number' name ='codigo'>
                <br> 
                Nome: <input type ='text' name ='nome'>
                <br>
                Nascimento: <input type ='date' name ='nasciemnto'>
                <br>
                Endereço: <input type ='text' name ='enedereco'>
                <br>
                Cpf: <input type ='number' name ='cpf'>
                <br>  
                <input type = hidden name =op value= $op>     
                <button type='submit'>Enviar</button>
                <button type='reset'>Limpar</button>
            </form>
            </fieldset> 
            </body>
            ";
            
            break;
        case 3:
            echo "
            <fieldset>
            <legend><h1>Listar o Cliente</h1></legend>
            <form action='calculo.php'  method ='GET'>
                Código: <input type ='number' name ='codigo'>
                <br> 
                Nome: <input type ='text' name ='nome'>
                <br>
                Nascimento: <input type ='date' name ='nasciemnto'>
                <br>
                Endereço: <input type ='text' name ='enedereco'>
                <br>
                Cpf: <input type ='number' name ='cpf'>
                <br>  
                <input type = hidden name =op value= $op>     
                <button type='submit'>Enviar</button>
                <button type='reset'>Limpar</button>
            </form>
            </fieldset> 
            </body>
            
            ";
            break;

        case 4:
            echo "
            <fieldset>
            <legend><h1>Excluir o Cliente</h1></legend>
            <form action='calculo.php'  method ='GET'>
                Código: <input type ='number' name ='codigo'>
                <br> 
                Nome: <input type ='text' name ='nome'>
                <br>
                Nascimento: <input type ='date' name ='nasciemnto'>
                <br>
                Endereço: <input type ='text' name ='enedereco'>
                <br>
                Cpf: <input type ='number' name ='cpf'>
                <br>  
                <input type = hidden name =op value= $op>     
                <button type='submit'>Enviar</button>
                <button type='reset'>Limpar</button>
            </form>
            </fieldset> 
            </body>
            ";
            break;

        case 5:
            echo "
            <fieldset>
            <legend><h1>Alterar o Cliente</h1></legend>
            <form action='calculo.php'  method ='GET'>
                Código: <input type ='number' name ='codigo'>
                <br> 
                Nome: <input type ='text' name ='nome'>
                <br>
                Nascimento: <input type ='date' name ='nasciemnto'>
                <br>
                Endereço: <input type ='text' name ='enedereco'>
                <br>
                Cpf: <input type ='number' name ='cpf'>
                <br>  
                <input type = hidden name =op value= $op>     
                <button type='submit'>Enviar</button>
                <button type='reset'>Limpar</button>
            </form>
            </fieldset> 
            </body>
            ";
            break;
   }

    ?>
</html>