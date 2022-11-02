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
        
        <h1 >ADICIONAR COMPRA</h1>
    </header>
    
    

    <main>
        <div class="containerPainel">
        
        <form  method ="POST" action="comprar.php">
            <p>Produto: Bujão de Gás 13KG MTL-S&A </p> 
            <p>     Quantidade*:        <input type="number"  name="quantidade" class="input" min="0" max="10000"></p>         
            <p>     Fornecedor:         <input type="text"  name="fornecedor" class="input"> </p>         
              <p>   Valor Unitário*: R$  <input type="number"  name="valorUnitario" class="input"> </p> 
              <label class= "quebra"><p>CPF: </label>
              <input 
                    type="text"  
                    name="cpf" 
                    class="input"
                    id = "cpf"
                    patern="\([0-9]\)[9]{1}[0-9]{4}[-]{1}[0-9]{4}" 
                    maxlength="14"
                    placeholder="CPF"
                    onkeyup="mascara_cpf()"> </p>

                <input type="reset" value="Limpar" class="button">
                <input type="submit" value="Adicionar Compra" class="button">     
                                       
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
            

             
            $sql = "INSERT INTO estoque_compra (data, quantidade)
            VALUES ('$data', '$quantidade')";

            
            
            if($conn->query($sql) === TRUE) {
                echo "<p>Compradas $quantidade unidades<p>";
             //   $listar->listarVendas();
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">     
    </script>
    <script>
        $("#valorUnitario").mask({
            prefix: "R$:",
            decimal: ",",
            thousands: "."
        })
    </script>
    </body>
    </html>