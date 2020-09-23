<?php
Class Casamento extends Certidao //implements EmitirDoc
{
    private $pessoa1;
    private $pessoa2;
    private $dataCasamento;
    private $testemunha;

    public function __construct($numRegitro, $declarante, $dataEmissao, $tabeliao, $cartorio, $pessoa1, $pessoa2, $dataCasamento, $testemunha)
    {
        parent::__construct ($numRegitro, $declarante, $dataEmissao, $tabeliao, $cartorio);
        $this->pessoa1 = $pessoa1;
        $this->pessoa2 = $pessoa2;
        $this->dataCasamento = $dataCasamento;
        $this->testemunha = $testemunha;
    }

    public function getPessoa1()
    {
        return $this->pessoa1;
    }

    public function getPessoa2()
    {
        return $this->pessoa2;
    }

    public function getDataCasamento()
    {
        return $this->dataCasamento;
    }

    public function getTestemunha()
    {
        return $this->testemunha;
    }

    public function emitirCertidao()
    {
        echo ('Emitindo certidão de casamento <br>');
    }

    //public function emitindo()
    //{
    //    echo ('Documento emitido.');
    //}

}