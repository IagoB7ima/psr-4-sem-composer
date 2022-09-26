<?php
    class Ficha
    {
        public $produtos, $jogador;

        public function cadastrar (array $produtos, Jogador $jogador)
        {
            $this->jogador = $jogador;
            $this->produtos = $produtos;
        }

        public function imprimir()
        {
            $retorna= $this->jogador->imprimir();
            $retorna.= '<hr>';
            $retorna.= 'Habilidade: ' . '<br>';
            foreach ($this->produtos as $produto){
                $retorna.= $produto->imprimir();
            }

            return $retorna;
        }

    }

?>