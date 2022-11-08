<?php
     class  CustomValues{       
       
         static function getEstoqueMaximo(){
            $estoqueMaximo = 800;
            return $estoqueMaximo;
         }
         static function getEstoqueMinimo(){
            $estoqueMinimo = 100;
            return $estoqueMinimo;
         }
         static function getMargemDeVenda(){
            $margem = 0.25;
            return $margem;
         }

}

?>