<?php
    class Listar {

       
        
        /**Lista todas as vendas e da um echo */
        public function listarVendas(){
            include("conecta.php");

            $sql   ="SELECT  * FROM estoque_venda  ";
           
            
            
             $result = $conn->query($sql);
        
            if($result->num_rows > 0  ){               
               
                while($row = $result->fetch_assoc()){
                    echo       "<p>id: ". $row["id"]. 
                    "///   Data: ". $row["data"].
                    "///   Quantidade: ". $row["quantidade"].                    
                    "</p><p>-------------------------------------------------------------------------------------------------------------------------</p>";

        
                }
            }else{
                echo "nada encontrado";
            } 
        }
        /**Lista todas as vendas sem dar um echo */
        public function getTotalVendas(){
            include("conecta.php");
            $totalVendas =0;
            $numVendas;

            $sql   ="SELECT  * FROM estoque_venda  ";
           
            
            
             $result = $conn->query($sql);
        
            if($result->num_rows > 0  ){               
               while($row = $result->fetch_assoc()){
                    $totalVendas = ($row["quantidade"] + $totalVendas);
                    $numVendas++;
                    

        
                }
                
            }else{
                echo "nada encontrado";
            } 
            return $totalVendas;
        }

        public function pagarconta($valor){
          echo "<br/>Foi pago o valor de R$ ".$valor;
        }
    }


?>