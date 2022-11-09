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
        <h1 > Relatório de Venda</h1>
    </header>

    <main>
        <div class="containerPainel">

       
        <form  method ="POST" action="relatorioVenda.php">
                <p>Produto: Bujão de Gás 13KG MTL-S&A </p> 

                <p><label class= "labelForm">Inicio:</label> 
                <input type="date"  name="datainicial" class="" min="0" max="10000"> 
                <label class= "labelForm">Fim:</label> 
                <input type="date"  name="dataFinal" class="" min="0" max="10000">                        
                <input type="submit" value="Pesquisar" class="button"> 
                <input type="reset" value="Limpar" class="button"></p>    
                                       
        </form>
        </div>
        <div class="containerPainel">
       
        <?php
        include_once('models/vendaDAO.php');           

        if(isset($_POST["datainicial"])){    $datainicial = $_POST["datainicial"];}        else{$datainicial = null;}
        if(isset($_POST["dataFinal"])){       $dataFinal = $_POST["dataFinal"];}              else{$dataFinal = null;}
            
        VendaDAO::listar($datainicial, $dataFinal);           

        ?>
        </div>
    </main>
    <footer>
       
    </footer>
    <script src="js/mascara.js"></script>
    </body>
    </html>