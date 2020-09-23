<?php
require_once ('Cartorio.php');
require_once ('Certidao.php');
require_once ('Nascimento.php');
require_once ('Casamento.php');
require_once ('Obito.php');
require_once ('Propriedade.php');
require_once ('Pessoa.php');
require_once ('Contrato.php');
require_once ('CompraVenda.php');
require_once ('Servico.php');
require_once ('Trabalho.php');
//require_once ('Registro.php');
require_once ('ContaCertidao.php');
require_once ('ContaContrato.php');
//require_once ('EmitirDoc.php');

$cartorio = new Cartorio('Cartorio', 'Rua Dois', '123445677');

$pessoa1 = new Pessoa ('Maria','1234');
$pessoa2 = new Pessoa ('Joao','1234');
$pessoa3 = new Pessoa ('Ana','1234');
$pessoa3 = new Pessoa ('Jose','1234');
$pessoa4 = new Pessoa ('Julana','1234');
$pessoa5 = new Pessoa ('Ricardo','1234');

$nascimento = new Nascimento('123', $pessoa1, '01-01', $pessoa2, $cartorio, $pessoa3, $pessoa4, $pessoa5, '02-02', 'sao paulo', 'sp');
$nascimento->emitirCertidao();

$casamento = new casamento ('123', $pessoa1, '01-01', $pessoa2, $cartorio, $pessoa3, $pessoa4,'03-03', $pessoa5);
$casamento->emitirCertidao();

$obito = new Obito ('123', 'declarante', '01-01', 'tabeliao', $cartorio, 'falecido', '03-03');
$obito->emitirCertidao();

$propriedade = new Propriedade ('123', 'declarante', '01-01', 'tabeliao', $cartorio, 'proprietario', '03-03');
$propriedade->emitirCertidao();

$compra = new CompraVenda('12344', 'Partes', $pessoa1, $pessoa2, '01-01', '02-02',$pessoa3, $cartorio,  'coisas');
$compra->emitirContrato();

$servico = new CompraVenda('12344', 'Partes', $pessoa1, $pessoa2, '01-01', '02-02', $pessoa3, $cartorio, 'servico');
$servico->emitirContrato();

$trabalho = new Trabalho('12344', 'Partes', $pessoa1, $pessoa2, '01-01', '02-02', $pessoa3, $cartorio, '03-03');
$trabalho->emitirContrato();

$qtdCertidao = new ContaCertidao;
$qtdCertidao->adicionaCertidao($casamento);
$qtdCertidao->adicionaCertidao($nascimento);
$qtdCertidao->adicionaCertidao($obito);
$qtdCertidao->adicionaCertidao($propriedade);
$qtdCertidao->contarTodas();

$qtdContrato = new ContaContrato;
$qtdContrato->adicionaContrato($compra);
$qtdContrato->adicionaContrato($servico);
$qtdContrato->adicionaContrato($trabalho);
$qtdContrato->contarTodos();

//$casamento->emitindo();