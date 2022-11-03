<?php
    class CustomMath { 

       
        
        /**Lista todas as vendas e da um echo */
        public static function moedaParaFloat($valorUnitario){
            $source =array(".",",");
            $replace = array("", ".");
            $valor = str_replace($source, $replace, $valorUnitario);
            return $valor;
        }
       
        
    }


?>