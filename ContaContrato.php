<?php
class ContaContrato
{
    private $contratos;
    private $qtdContrato;

    public function adicionaContrato($contrato)
    {
        $this->contratos[] = $contrato;
    }

    public function contarTodos()
    { 
        foreach ($this->contratos as $contrato){
            $this->qtdContrato+=1;
        }
        echo ('Você tem ' .$this->qtdContrato .' contratos.<br>');
    }
}