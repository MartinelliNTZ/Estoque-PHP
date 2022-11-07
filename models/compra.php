<?php
    class Compra {
        var $id;//determinado pelo banco
        var $data;
        var $quantidade;
        var $fornecedor;
        var $valorUnitario;

        
            function __constructor($quantidade, $fornecedor, $valorUnitario){           
            $this->quantidade=$quantidade;
            $this->fornecedor=$fornecedor;
            $this->valorUnitario=$valorUnitario;
            $this->data = $this->configData();            
            }
        /**
         * Método que atribui a data atual a variavel data
         */
        private function configData(){
            $timezone = new DateTimeZone('America/Sao_Paulo');
            $agora = new DateTime('now', $timezone);        
            $data = $agora->format('Y-m-d H:i:s');
            return $data;
        }    
    }
?>