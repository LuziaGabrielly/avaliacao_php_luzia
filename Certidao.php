<?php
abstract Class Certidao //implements Registro
{
    protected $numRegitro;
    protected $declarante;
    protected $dataEmissao;
    protected $tabeliao;
    protected $cartorio;

    public function __construct($numRegitro, $declarante, $dataEmissao, $tabeliao, $cartorio)
    {
        $this->numRegistro = $numRegitro;
        $this->declarante = $declarante;
        $this->dataEmissao = $dataEmissao;
        $this->tabeliao = $tabeliao;
        $this->cartorio = $cartorio;
    }

    public function getNumRegistro()
    {
        return $this->numRegistro;
    }

    public function getDeclarante()
    {
        return $this->declarante;
    }

    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    public function getTabeliao()
    {
        return $this->tabeliao;
    }

    public function getCartorio()
    {
        return $this->cartorio;
    }

    abstract public function emitirCertidao();

    //public function registrar($documento)
    //{
    //    echo ('O numero do registro do seu documento é ' .$numRegitro);
    //}

}