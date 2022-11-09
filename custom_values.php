<?php
     class  CustomValues{       
         /**
          * Retorna a quantidade máxima que deve conter em estoque
          */
         static function getEstoqueMaximo(){
            $estoqueMaximo = 900;
            return $estoqueMaximo;
         }
         /**
          * Retorna a quantidade minima de que deve conter em estoque
          */
         static function getEstoqueMinimo(){
            $estoqueMinimo = 100;
            return $estoqueMinimo;
         }
         /**
          * retorna a porcentagem de lucro recomendada sobre a venda
          */
         static function getMargemDeVenda(){
            /**Porcentagem de lucro ex:25 = 25% */
            $porcentagemDeLucro = 25;
            $margem = $porcentagemDeLucro/100;
            return $margem;
         }

}

?>