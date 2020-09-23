<?php
class ContaCertidao
{
    private $certidoes;
    private $qtdCertidao;

    public function adicionaCertidao($certidao)
    {
        $this->certidoes[] = $certidao;
    }

    public function contarTodas()
    { 
        foreach ($this->certidoes as $certidao){
            $this->qtdCertidao +=1;
        }
        echo ('Você tem ' .$this->qtdCertidao .' certidoes.<br>');
    }
}