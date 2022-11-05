<?php
    class Util {

               /**
         * Função que converte numeros em 88.888,00 em float */
        function converter ( $valorUnitario){
            $source =array(".",",");
            $replace = array("", ".");
            $valor = str_replace($source, $replace, $valorUnitario);
            return $valor;
        }
        /**
         * Retorna a data atua do sistema em formato 'Y-m-d H:i:s'         */
        function dataAtual(){
            $timezone = new DateTimeZone('America/Sao_Paulo');
            $agora = new DateTime('now', $timezone);        
            $data = $agora->format('Y-m-d H:i:s');
            return $data;
        }
        
        /**Lista todas as vendas e da um echo */
        public function listarVendas(){
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

       
    }


?>