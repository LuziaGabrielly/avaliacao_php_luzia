<?php
Class Trabalho extends Contrato
{
    private $dataContratacao;

    public function __construct($numRegistro, $partesEnvolvidas, $testemunha1, $testemunha2, $dataEmissao, $dataRegistro, $tabeliao, $cartorio, $dataContratacao)
    {
        parent::__construct ($numRegistro, $partesEnvolvidas, $testemunha1, $testemunha2, $dataEmissao, $tabeliao, $cartorio, $dataRegistro);
        $this->dataContratacao = $dataContratacao;
    }

    public function getDataContratacao()
    {
        return $this->dataContratacao;
    }


    public function emitirContrato()
    {
        echo ('Emitindo contrato de trabalho. <br>');
    }

}