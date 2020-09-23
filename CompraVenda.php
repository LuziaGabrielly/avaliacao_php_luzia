<?php
Class CompraVenda extends Contrato
{
    private $itemVendido;

    public function __construct($numRegistro, $partesEnvolvidas, $testemunha1, $testemunha2, $dataEmissao, $dataRegistro, $tabeliao , $cartorio, $itemVendido)
    {
        parent::__construct ($numRegistro, $partesEnvolvidas, $testemunha1, $testemunha2, $dataEmissao, $dataRegistro ,$tabeliao , $cartorio);
        $this->itemVendido = $itemVendido;
    }

    public function getItemVendido()
    {
        return $this->itemVendido;
    }


    public function emitirContrato()
    {
        echo ('Emitindo contrato de compra e venda. <br>');
    }

}