<?php
Class Obito extends Certidao
{
    private $falecido;
    private $dataFalecimento;

    public function __construct($numRegitro, $declarante, $dataEmissao, $tabeliao, $cartorio, $falecido, $dataFalecimento)
    {
        parent::__construct ($numRegitro, $declarante, $dataEmissao, $tabeliao, $cartorio);
        $this->falecido = $falecido;
        $this->dataFalecimento = $dataFalecimento;
    }

    public function getFalecido()
    {
        return $this->falecido;
    }

    public function getDataFalecimento()
    {
        return $this->dataFalecimento;
    }

    public function emitirCertidao()
    {
        echo ('Emitindo certidão de obito <br>');
    }

}