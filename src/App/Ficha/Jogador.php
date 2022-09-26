<?php
    class Jogador{

        public $nome, $idade;

        public function cadastrar($nome, $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function imprimir()
        {
            $retorna = 'Nome:' . $this->nome. '<br>';
            $retorna.= 'Idade:' . $this->idade. '<br>';

            return $retorna;
        }

    }

?>