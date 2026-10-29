<?php

    class Robo{
        public $nome;
        public $modelo;
        public $energia;
        public $potencia;

       public function __construsct($nome,$modelo,$energia,$potencia){
        $this->nome = $nome;
        $this->modelo = $modelo;
        $this->energia = $energia;
        $this->potencia = $potencia;

       }

       public function exibirStatus(){
        return "Modelo {$this->modelo}
                Energia {$this->energia}
                Potência{$this->potencia}";
       }

       public function recarregar(){
        $this->energia += 10;
        
        if ($this->energia > 200){
            $this->energia = 200;
        } 
       }
    }
?>