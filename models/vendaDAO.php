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
               
                while($row = $result->fetch_assoc()){
                    echo       "<p>id: ". $row["id"]. 
                    " //   Data: ". $row["data"].
                    " //   Quantidade: ". $row["quantidade"].                    
                    "</p><p>-------------------------------------------------------------------------------------------------------------------------</p>";
    
        
                }
            }else{
                echo "nada encontrado";
            } 
        }
    }
    
?>