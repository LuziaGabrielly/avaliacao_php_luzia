<?php
Class Servico extends Contrato
{
    private $servicoPrestado;

    public function __construct($numRegistro, $partesEnvolvidas, $testemunha1, $testemunha2, $dataEmissao, $dataRegistro, $tabeliao, $cartorio, $servicoPrestado)
    {
        parent::__construct ($numRegistro, $partesEnvolvidas, $testemunha1, $testemunha2, $dataEmissao, $dataRegistro, $tabeliao, $cartorio);
        $this->servicoPrestado = $servicoPrestado;
    }

    public function getServicoPrestado()
    {
        return $this->ServicoPrestado;
    }


    public function emitirContrato()
    {
        echo ('Emitindo contrato de serviço prestado. <br>');
    }

}