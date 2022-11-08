<?php
    class CompraDAO {
       
        static function listar(){
            $numVendas = 0;
            $quantidade = 0;
            $montante = 0;
            include("conecta.php");    
            $sql   ="SELECT  * FROM estoque_compra  ";         
            
            $result = $conn->query($sql);
        
            if($result->num_rows > 0  ){               
                echo "<p><table>";
                while($row = $result->fetch_assoc()){
                    $total = $row['quantidade']*$row['valorUnitario'];
                    echo       "<tr> <td>id: ". $row["id"]. 
                    " </td><td>   Data: ". $row["data"].
                    " </td><td>   Fornecedor: ". $row["fornecedor"].
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

        
        static function listarComFiltro($dataInicial, $dataFinal){
            $numVendas = 0;
            $quantidade = 0;
            $montante = 0;

            include("conecta.php");    
            include("venda.php"); 
            include_once('util.php');   
            $sql   ="SELECT * FROM estoque_compra WHERE data BETWEEN '$dataInicial' AND '$dataFinal' ";         
            
            $result = $conn->query($sql);
        
            if($result->num_rows > 0  ){               
               echo "<p><table>";
                while($row = $result->fetch_assoc()){
                    $total = $row['quantidade']*$row['valorUnitario'];
                    echo       "<tr> <td>id: ". $row["id"]. 
                    " </td><td>   Data: ". $row["data"].
                    " </td><td>   Fornecedor: ". $row["fornecedor"].
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
            $m = number_format($montante, 2, ',', '.');
            echo "<p><label class= 'labelForm'>Vendas:$numVendas</label> 
                        <label class= 'labelForm'>Quantidade:$quantidade</label>
                        <label class= 'labelForm'>Montante:R$ $m</label>
            </p>";

        }
    }
    
    
?>