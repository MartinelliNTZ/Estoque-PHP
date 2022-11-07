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
         * Função que converte float em 88.888,00 */
        static function reconverter ( $valorUnitario){
            $source =array("",".");
            $replace = array(".", ",");
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
        

     
        
       
    }


?>