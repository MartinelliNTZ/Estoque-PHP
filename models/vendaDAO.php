<?php
    class VendaDAO {
        /**
         * Salva um objeto do tipo venda no banco de dados
         */
        static function salvar(Venda $venda){  
                include("conecta.php");  
                $sql = "INSERT INTO estoque_venda (data, quantidade, cliente, valorUnitario)
                VALUES ('$venda->data', '$venda->quantidade', '$venda->cliente', '$venda->valorUnitario')";
                return $conn->query($sql);               
        }
        static function listar(){
            include("conecta.php");    
            $sql   ="SELECT  * FROM estoque_venda  ";         
            
            $result = $conn->query($sql);
        
            if($result->num_rows > 0  ){               
                echo "<p><table>";
                while($row = $result->fetch_assoc()){
                    echo       "<tr>
                    <td>id: ". $row["id"]. 
                    " </td><td>   Data: ". $row["data"].
                    " </td><td>   Cliente: ". $row["cliente"].
                    " </td><td>   Quantidade: ". $row["quantidade"].  "<td>".                  
                    "</tr>";
    
        
                }
                echo "<p></table>";
            }else{
                echo "nada encontrado";
            } 
        }

        
        static function listarComFiltro($dataInicial, $dataFinal){
            $numVendas = 0;
            $quantidade = 0;
            $montante = 0;

            include("conecta.php");    
            include("venda.php");    
            $sql   ="SELECT * FROM estoque_venda WHERE data BETWEEN '$dataInicial' AND '$dataFinal' ";         
            
            $result = $conn->query($sql);
        
            if($result->num_rows > 0  ){               
               echo "<p><table>";
                while($row = $result->fetch_assoc()){
                    $total = $row['quantidade']*$row['valorUnitario'];
                    echo       "<tr> <td>id: ". $row["id"]. 
                    " </td><td>   Data: ". $row["data"].
                    " </td><td>   Cliente: ". $row["cliente"].
                    " </td><td>   Quantidade: ". $row["quantidade"].                    
                    " </td><td>   Preço: R$ ". $row["valorUnitario"].                    
                    " </td><td>   Total: R$ ". $total.                    
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
                        <label class= 'labelForm'>Montante:$montante</label>
            </p>";

        }
        /**
         * Retorna um info quew é um objeto contendo os totais de venda e 
         */
        static function getInfo(){
            $numVendas = 0;
            $quantidade = 0;
            $montante = 0;
            $valorMedio = 0;

            include("conecta.php");    
            include("venda.php");    
            include("info.php");    
            $sql   ="SELECT * FROM estoque_venda";         
            
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