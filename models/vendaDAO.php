<?php
    class VendaDAO {
        /**
         * @param venda recebe um onjeto do tipo venda para salvar no banco de dados
         * Salva um objeto do tipo venda no banco de dados
         * @return false se a operação falhar
         * @return true se a operação for um sucesso
         */
        static function salvar(Venda $venda){  
                include("conecta.php");  
                $sql = "INSERT INTO estoque_venda (data, quantidade, cliente, valorUnitario)
                VALUES ('$venda->data', '$venda->quantidade', '$venda->cliente', '$venda->valorUnitario')";
                return $conn->query($sql);               
        }
        /**
         * @param datainicial a data inicial em que se queira buscar os dados 
         * @param datafinal a data final em que se queira buscar os dados 
         * se a caso uma das datas for nula retornara o valor do periodo inteiro
         * caso sejam datas validas ele busca no banco de dados e retorna somente as informações naquele periodo
         */
        static function listar($dataInicial, $dataFinal){
            $dataInit = $dataInicial;
            include("conecta.php");    
            include("venda.php"); 
            $numVendas = 0;
            $quantidade = 0;
            $montante = 0;
            
            if($dataInicial==null || $dataFinal==null){
                $sql  ="SELECT  * FROM estoque_venda  "; 
                $message = "<p >Exibindo todas as vendas desde o inicio</p>
                <p>-------------------------------------------------------------------------------------------------------------------------</p>";
            }else{
                $message = "<p >Pesquisa entre ".$dataInit." e $dataFinal</p>
                <p>-------------------------------------------------------------------------------------------------------------------------</p>";
                $sql   ="SELECT * FROM estoque_venda WHERE data BETWEEN '$dataInicial' AND '$dataFinal' "; 
            }                   
            $result = $conn->query($sql);
            echo $message;        
            if($result->num_rows > 0  ){               
               echo "<p><table>";
                while($row = $result->fetch_assoc()){
                    $total = $row['quantidade']*$row['valorUnitario'];
                    echo       "<tr> <td>id: ". $row["id"]. 
                    " </td><td>   Data: ". $row["data"].
                    " </td><td>   Cliente: ". $row["cliente"].
                    " </td><td>   Quantidade: ". $row["quantidade"].                    
                    " </td><td>   Preço: R$ ". number_format($row["valorUnitario"], 2, ',', '.').                    
                    " </td><td>   Total: R$ ". number_format($total, 2, ',', '.').                    
                    "</td>";
                    $numVendas++;
                    $quantidade+=$row["quantidade"];
                    $montante+=$total;
    
        
                }
                echo "</table></p>";
            }else{
                echo "<p>nada encontrado</p>";
            } 
           
            echo "<p><label class= 'labelForm'>Vendas:$numVendas</label> 
                        <label class= 'labelForm'>Quantidade:$quantidade</label>
                        <label class= 'labelForm'>Montante: R$".number_format($montante, 2, ',', '.')."</label>
            </p>";

        }
        /**
         * @return Info com todas as informações de vendas 
         * @param datainicial a data inicial em que se queira buscar os dados 
         * @param datafinal a data final em que se queira buscar os dados 
         * se a caso uma das datas for nula retornara o valor do periodo inteiro
         */
        static function getInfo($dataInicial, $dataFinal){
            include("conecta.php");    
            include("venda.php");    
            include("info.php"); 
            $numVendas = 0;
            $quantidade = 0;
            $montante = 0;
            $valorMedio = 0;

            if($dataInicial==null || $dataFinal==null){
                $sql  ="SELECT  * FROM estoque_venda  ";                 
            }else{
                $sql   ="SELECT * FROM estoque_venda WHERE data BETWEEN '$dataInicial' AND '$dataFinal' "; 
            }            
        
            
            $result = $conn->query($sql);
        
            if($result->num_rows > 0  ){              
                while($row = $result->fetch_assoc()){
                    $total = $row['quantidade']*$row['valorUnitario'];
 
                    $numVendas++;
                    $quantidade+=$row["quantidade"];
                    $montante+=$total;    
        
                }

            $valorMedio = $montante /$quantidade; 
            $info = new Info();
            $info->__constructor($numVendas, $quantidade, $montante, $valorMedio); 
            return $info;
            
               
            }else{
                echo "<p>nada encontrado</p>";
            } 

        }
    }
    
?>