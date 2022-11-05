<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo do site</title>
    <link rel= "stylesheet" href = "style/estiloPadrao.css">
    <link rel= "stylesheet" href = "style/classesStyle.css">
    <link rel= "stylesheet" href = "style/idsStyle.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

</head>

    <ul><!--Lista de botoes de cabeçalho-->
    <li><a href="index.html">Página Inicial</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="vender.php">Vendas</a></li>
        <li><a href="comprar.php">Compras</a></li>
        <li><a href="about.php">Sobre</a></li>        
    </ul>
    <a href="" id="hora">Hora:</a>
     

   
    <header>
        
        <h1 >ADICIONAR COMPRA</h1>
    </header>
    
    

    <main>
        <div class="containerPainel">
        
        <form  method ="POST" action="comprar.php">
                <p>Produto: Bujão de Gás 13KG MTL-S&A </p> 
                <p><label class= "labelForm">Quantidade*:</label> 
                <input type="number"  name="quantidade" class="input" min="0" max="10000"></p> 

                <p><label class= "labelForm">Fornecedor:</label>        
                <input type="text"  name="fornecedor" class="input"> </p>         
                  
                <p><label class= "labelForm">Valor Unitário*: R$</label>
                <input type="text" id="valorUnitario" name="valorUnitario" class="input" 
                autocomplete= "off"
                onkeyup="mascara_reais()"
                placeholder="0.000,00"> </p> 

                <input type="reset" value="Limpar" class="button">
                <input type="submit" value="Adicionar Compra" class="button">     
                                       
        </form>
        </div>
        <div class="containerPainel">
       
        <?php
        if(isset($_POST["quantidade"])){    $quantidade = $_POST["quantidade"];}        else{ $quantidade = null;}
        if(isset($_POST["valorUnitario"])){ $valorUnitario = $_POST["valorUnitario"];}  else{ $valorUnitario = null;}
        if(isset($_POST["fornecedor"])){    $fornecedor = $_POST["fornecedor"];}        else{ $fornecedor = null;}
        if($quantidade !=null & $quantidade >0){ 
            include("conecta.php");

            $data = dataAtual();
            $valor = converter($valorUnitario);/**Falta adicionar ao banco */          
                         
            $sql = "INSERT INTO estoque_compra (data, quantidade,fornecedor, valorUnitario)
            VALUES ('$data', '$quantidade','$fornecedor', '$valor')";          
           
            if($conn->query($sql) === TRUE) {
                $valorTotal = $quantidade*$valor;
                $valorTotal = number_format($valorTotal,2,",",".");
                echo "<p>Compradas $quantidade unidades.
                A R$$valorUnitario cada. Totalizando: R$$valorTotal.
                <p>";               
               
               
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error."</p>";
            }




        }else if($quantidade <= 0){         
            echo "<p>Valor não pode ser negativo</p>";
        }
        
        else{
            echo "<p>Por favor insira um valor</p>";
        }

        /**
         * Função que converte numeros em 88.888,00 em float */
        function converter ( $valorUnitario){
            $source =array(".",",");
            $replace = array("", ".");
            $valor = str_replace($source, $replace, $valorUnitario);
            return $valor;
        }
        /**
         * Retorna a data atua do sistema em formato 'Y-m-d H:i:s'         */
        function dataAtual(){
            $timezone = new DateTimeZone('America/Sao_Paulo');
            $agora = new DateTime('now', $timezone);        
            $data = $agora->format('Y-m-d H:i:s');
            return $data;
        }

         

        ?>
        </div>
        
    </main>
    <footer>
       
    </footer>
      
    <script src="js/mascara.js"></script>
    
    </body>
    </html>