<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo do site</title>
    <link rel= "stylesheet" href = "style/estiloPadrao.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

</head>
<body>
    <ul><!--Lista de botoes de cabeçalho-->
    <li><a href="index.html">Página Inicial</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="vender.php">Vendas</a></li>
        <li><a href="comprar.php">Compras</a></li>
        <li><a href="about.php">Sobre</a></li>
    </ul>
    <header>
        <h1 > Adicionar Venda</h1>
    </header>

    <main>
        <div class="containerPainel">

        <form  method ="POST" action="vender.php">
            <p>Produto: Bujão de Gás 13KG MTL-S&A </p> 
            <p>  Quantidade: <input type="number"  name="quantidade" class="input"> </p>         
                <input type="reset" value="Limpar" class="button">
                <input type="submit" value="Realizar Venda" class="button">
       
                
        </form>
        </div>
        <div class="containerPainel">
       
        <?php
        if(isset($_POST["quantidade"])){          $quantidade = $_POST["quantidade"];     }       else{       $quantidade = null;     }
        if($quantidade !=null & $quantidade >0){    
            include("conecta.php");
            include("listar.php");
            $listar = new Listar();
            
            $timezone = new DateTimeZone('America/Sao_Paulo');
            $agora = new DateTime('now', $timezone);        
            $data = $agora->format('Y-m-d H:i:s');
            

             
            $sql = "INSERT INTO estoque_venda (data, quantidade)
            VALUES ('$data', '$quantidade')";

            
            
            if($conn->query($sql) === TRUE) {
                echo "<p>Vendido $quantidade unidades<p>";
             //   $listar->listarVendasNoEcho();
                
             $totalVendas = $listar->getTotalVendas;
                echo "<p>Número de vendas: " . $totalVendas . " Total Vendido: " . "7"."</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error."</p>";
            }


           








            
        }else if($quantidade <= 0){
            echo "<p>Valor não pode ser negativo</p>";
           
           
            
           
            
        }
        
        else{
            echo "<p>Por favor insira um valor</p>";
        }


        ?>
        </div>
    </main>
    <footer>
       
    </footer>

    </body>
    </html>