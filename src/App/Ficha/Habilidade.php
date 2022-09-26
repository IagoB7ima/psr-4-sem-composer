<?php
    class Habilidade
    {
        public $habilidade;

        public function cadastrar($habilidade)
        {
            $this->habilidade = $habilidade;
        }

        public function imprimir()
        {
            $retorna = $this->habilidade . ' <br> ';

            return $retorna;
        }
    }

?>