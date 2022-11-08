<?php
    class Info {        
        var $numVendas;
        var $quantidade;
        var $montante;
        var $valorMedio;


        
            function __constructor($numVendas, $quantidade, $montante, $valorMedio){           
            $this->quantidade=$quantidade;
            $this->numVendas=$numVendas;
            $this->montante=$montante;
            $this->valorMedio=$valorMedio;                       
            }
      
        
    }
?>