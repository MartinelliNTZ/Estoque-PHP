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
        <li><a href="cadastro.php">Cadastro</a></li>
        <li><a href="estoque.php">Estoque</a></li>
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
                <table>
                    <p>Produto: Bujão de Gás 13KG MTL-S&A </p> 
                    <tr><td class="tdForm"><label class= "labelForm">Quantidade*:</label></td> 
                    <td class="tdForm"><input type="number"  name="quantidade" class="input" min="0" max="10000"></td></tr> 

                    <tr><td class="tdForm"><label class= "labelForm">Cliente:</label></td>        
                    <td class="tdForm"><input type="text"  name="cliente" class="input"> </td> </tr>        
                    
                    <tr><td class="tdForm"><label class= "labelForm">Valor Unitário*: R$</label></td>
                    <td class="tdForm"><input type="text" id="valorUnitario" name="valorUnitario" class="input" 
                    autocomplete= "off"
                    onkeyup="mascara_reais()"
                    placeholder="0.000,00"> </td></tr> 
                

                    <td class="tdForm"><input type="reset" value="Limpar" class="button"></td>
                    <td class="tdForm"><input type="submit" value="Adicionar Venda" class="button"> </td>
                </table>    
                                       
        </form>
        
       
        <?php
                include_once("models/vendaDAO.php");
                include_once("models/compraDAO.php");                
                include_once("helpers/custom_values.php");
                include_once("helpers/util.php");

                $infoVenda = VendaDAO::getInfo(null,null);
                $infoCompra = CompraDAO::getInfo(null, null);
                $estoqueTotal = $infoCompra->quantidade -$infoVenda->quantidade;
                $preçoSujerido= $infoCompra->valorMedio * (CustomValues::getMargemDeVenda()+1);

                $estoqueMinimo = CustomValues::getEstoqueMinimo();
                echo "<p>Em estoque: $estoqueTotal    
                Estoque minimo: $estoqueMinimo
                 Preço sujerido R$". number_format($preçoSujerido,2,",",".")."</p>";
                echo "</div><div class='containerPainel'>";


        if(isset($_POST["quantidade"])){    $quantidade = $_POST["quantidade"];}        else{$quantidade = null;}
        if(isset($_POST["cliente"])){       $cliente = $_POST["cliente"];}              else{$cliente = null;}
        if(isset($_POST["valorUnitario"])){ $valorUnitario = $_POST["valorUnitario"];}  else{$valorUnitario = null;}

        if ($quantidade<=$estoqueTotal) {
            if(VenderPage::verificar($quantidade, $valorUnitario)){
                $valor = Util::converter($valorUnitario);             
                $venda =new Venda();
                $venda->__constructor($quantidade,$cliente, $valor); 
                if(VendaDAO::salvar($venda))  {            
                
                    $valorTotal = number_format(($quantidade*$valor),2,",",".");    
                    echo "<p>Sucesso</p>";
                    echo "<p>Vendidas $quantidade unidades.
                    A R$$valorUnitario cada. Totalizando: R$$valorTotal.
                    <p>"; 
                    echo "<p>Em estoque: ".($estoqueTotal-$quantidade)."<p>";
                    if($estoqueMinimo>= ($estoqueTotal-$quantidade)){
                        echo "<p id='alerta'>Seu estoque está abaixo do limite por favor realize uma compra</p>";
                    }
                }else{
                    echo "<p>Erro inesperado</p>";
                }
            }  
        }else{
            echo "<p>Quantidade Insuficiente em estoque. O Máximo é $estoqueTotal</p>";
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