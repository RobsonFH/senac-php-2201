<?php
class Calculadora{

    private ?int $n1;
    private ?int $n2;

    public function __construct( $n1, $n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
    }

    public function soma():int
    {   
        return $this->n1 + $this->n2;
    }

    public function subtracao():int
    {
        return $this->n1 - $this->n2;
    }

    public function __destruct()
    {
        echo "Obrigado pela visita";
    }
}