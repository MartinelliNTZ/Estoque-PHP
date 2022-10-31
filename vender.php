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
        <li><a href="vender.php">Vender</a></li>
        <li><a href="about.php">Sobre</a></li>
    </ul>
    <header>
        <h1 > Adicionar Venda</h1>
    </header>

    <main>
        <div id="containerPainel">

        <form  method ="POST" action="vender.php">
            <p>Produto: Bujão de Gás 13KG MTL-S&A </p> 
            <p>  Quantidade: <input type="text"  name="quantidade" > </p>         
                <input type="reset" value="Limpar" class="input">
                <input type="submit" value="Buscar Cadastro">
       
                <a><BR><BR><BR>PARA ALTERAR SEU NOME OU SEU CPF VOCE PRECISA ENTRAR EMN CONTATO COM NOSSO SUPORTE<BR><BR><BR></a>       
            
           
            
             
        </form>

        </div>



        
       
    </main>
    <footer>
       
    </footer>

    </body>
    </html>