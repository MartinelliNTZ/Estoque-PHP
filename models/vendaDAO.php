<?php
    class VendaDAO {
        /**
         * Salva um objeto do tipo venda no banco de dados
         */
        static function salvar(Venda $venda){  
                include("conecta.php");  
                $sql = "INSERT INTO estoque_venda (data, quantidade, cliente, valorUnitario)
                VALUES ('$venda->data', '$venda->quantidade', '$venda->cliente', '$venda->valorUnitario')";
                return $conn->query($sql);               
        }
    }
?>