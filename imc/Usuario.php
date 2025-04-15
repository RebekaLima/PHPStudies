<?php

class Usuario {
    public $nome;
    public $peso;
    public $altura;
    public $imc;

    public function exibirInfo() {
        echo $this->nome."<br>";
    }

    public function calculoImc() {
        $this->imc = $this->peso/($this->altura * $this->altura);
    }

    public function exibirImc() {
        return $this->imc;
    }

    public function valorImc() {

        if($this->imc <= 18.5) {
            return "Abaixo do peso";
        } else if ($this->imc >= 18.5 && $this->imc <= 24.9) {
            return "Peso normal";
        } else if ($this->imc >= 25 && $this->imc <= 29.9) {
            return "Sobrepeso";
        } else if ($this->imc >= 30 && $this->imc <= 34.9) {
            return "Obesidade grau I";
        }  else if ($this->imc >= 35 &&  $this->imc <= 39.9) {
            return "Obesidade grau II";
        } else if ($this->imc >= 40) {
            return "Obesidade grau III";
        }       

    }

    public function exibirCalculoImc() {
        return valorImc();
    }

    
}

?>