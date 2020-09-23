<?php
Class Propriedade extends Certidao
{
    private $proprietario;
    private $dataPosse;

    public function __construct($numRegitro, $declarante, $dataEmissao, $tabeliao, $cartorio, $proprietario, $dataPosse)
    {
        parent::__construct ($numRegitro, $declarante, $dataEmissao, $tabeliao, $cartorio);
        $this->proprietario = $proprietario;
        $this->dataPosse = $dataPosse;
    }

    public function getProprietario()
    {
        return $this->proprietario;
    }

    public function getDataPosse()
    {
        return $this->dataPosse;
    }

    public function emitirCertidao()
    {
        echo ('Emitindo certidão de posse <br>');
    }

}