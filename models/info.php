<?php
/**
 * lasse info reprenta a somátória dos itens armazenados no banco de dados a Info pode ser do tipo venda
 *  ou do tipo compra pois ela tras apenas a somatoria dos valores como valor médio, montante, numero de
 *  vendas/compras e quantidade em estoque.
 */
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
