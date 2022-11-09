<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gás Estoque</title>
    <link rel= "stylesheet" href = "style/estiloPadrao.css">
    <link rel= "stylesheet" href = "style/classesStyle.css">
    <link rel= "stylesheet" href = "style/idsStyle.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />

</head>
<body>
    <ul><!--Lista de botoes de cabeçalho-->
        <li><a href="home.php">Página Inicial</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
        <li><a href="estoque.php">Estoque</a></li>
        <li><a href="vender.php">Vender</a></li>
        <li><a href="relatorioVenda.php">Vendas</a></li>
        <li><a href="comprar.php">Comprar</a></li>
        <li><a href="relatorioCompra.php">Compras</a></li>
        <li><a href="about.php">Sobre</a></li>
    </ul>
    <header>
        <h1 >Cadastro de produtos</h1>
    </header>

    <main>
        <div class="containerPainel">
        
        <form  method ="POST" action="cadastro.php">
            <table>
                <p>Produto: Bujão de Gás 13KG MTL-S&A </p> 
                <tr><td class="tdForm"><label class= "labelForm">Nome do Produto*:</label></td> 
                <td class="tdForm"><input type="text"  name="nomeProduto" class="input" min="0" max="10000"></tr></td> 

                <tr><td class="tdForm"><label class= "labelForm">Estoque minímo:</label></td>        
                <td class="tdForm"><input type="number"  name="estoqueMinimo" class="input"> </tr></td>         
                <tr><td class="tdForm"><label class= "labelForm">Estoque máximo:</label></td>        
                <td class="tdForm"><input type="number"  name="estoqueMaximo" class="input"> </tr></td> 
                <tr><td class="tdForm"><label class= "labelForm">Porcentagem de lucro</label></td>
                <td class="tdForm"><input type="number" name = "porcentagem"
                placeholder="25" class="input"> </tr></td> 

                <tr><td class="tdForm"><input type="reset" value="Limpar" class="button"></td>
                <td class="tdForm"><input type="submit" value="Adicionar Compra" class="button"></tr></td>     
            </table>                           
        </form>
            </div>
        <div class="containerPainel">
       
        <?php
  
        ?>
        </div>
    </main>
    <footer>
       
    </footer>
    <script src="js/mascara.js"></script>
    </body>
    </html>