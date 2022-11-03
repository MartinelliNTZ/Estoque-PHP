<?php
    class Venda {
        var $id;
        var $data;
        var $quantidade;
        var $fornecedor;
        var $valorUnitario;

        public function __constructor($id, $data, $quantidade, $fornecedor, $valorUnitario){
        $this->$id =$id;
        $this->$data=$data;
        $this->$quantidade=$quantidade;
        $this->$fornecedor=$fornecedor;
        $this->$valorUnitario=$valorUnitario;
        }
    }
?>