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
<body>
    <ul><!--Lista de botoes de cabeçalho-->
    <li><a href="index.html">Página Inicial</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="vender.php">Vender</a></li>
        <li><a href="relatorioVenda.php">Vendas</a></li>
        <li><a href="comprar.php">Comprar</a></li>
        <li><a href="relatorioCompra.php">Compras</a></li>
        <li><a href="about.php">Sobre</a></li>
    </ul>
    <header>
        <h1 > Adicionar Venda</h1>
    </header>

    <main>
        <div class="containerPainel">

       
        <form  method ="POST" action="vender.php">
                <p>Produto: Bujão de Gás 13KG MTL-S&A </p> 
                <p><label class= "labelForm">Quantidade*:</label> 
                <input type="number"  name="quantidade" class="input" min="0" max="10000"></p> 

                <p><label class= "labelForm">Cliente:</label>        
                <input type="text"  name="cliente" class="input"> </p>         
                  
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
        if(isset($_POST["quantidade"])){    $quantidade = $_POST["quantidade"];}        else{$quantidade = null;}
        if(isset($_POST["cliente"])){       $cliente = $_POST["cliente"];}              else{$cliente = null;}
        if(isset($_POST["valorUnitario"])){ $valorUnitario = $_POST["valorUnitario"];}  else{$valorUnitario = null;}
        if(VenderPage::verificar($quantidade, $valorUnitario)){  
            
            include("models/vendaDAO.php");
            include("models/venda.php");
            
            
                $venda =new Venda();
                $venda->__constructor($quantidade,$cliente, $valorUnitario);                
                VendaDAO::salvar($venda);    
                echo "<p>Sucesso</p>";
        }        
         class VenderPage{
            static function verificar($quantidade, $valorUnitario){
                if($quantidade ==null || $quantidade <=0){
                    echo "<p>Por favor insira uma quantidade válida</p>";
                    return false;
                 }elseif($valorUnitario==null || $valorUnitario<=0){
                    echo "<p>Por favor insira um valor unítario válida</p>";
                    return false;
                 } else{
                    return true;
                 }
                }
        }


        ?>
        </div>
    </main>
    <footer>
       
    </footer>
    <script src="js/mascara.js"></script>
    </body>
    </html>