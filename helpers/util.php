<?php
    class Util {
       
        /**
         * Função que converte numeros do tipo 88.888,00 em float  
         * @param valorUnitario no formato 88.888,00
         * @return valor no formato 88888.00
         * */
        static function converter ( $valorUnitario){
            $source =array(".",",");
            $replace = array("", ".");
            $valor = str_replace($source, $replace, $valorUnitario);
            return $valor;
        }
        /**
         * Função que converte float em 88.888,00 
         * @param valorUnitario no formato 88888,00
         * @return valor no formato 88.888,00
         * */
        static function reconverter ( $valorUnitario){
            $source =array("",".");
            $replace = array(".", ",");
            $valor = str_replace($source, $replace, $valorUnitario);
            return $valor;
        }
        /**
         * @return data atua do sistema em formato 'Y-m-d H:i:s'         
         * */
        function dataAtual(){
            $timezone = new DateTimeZone('America/Sao_Paulo');
            $agora = new DateTime('now', $timezone);        
            $data = $agora->format('Y-m-d H:i:s');
            return $data;
        }
    }


?>