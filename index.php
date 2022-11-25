<?php

require './vendor/autoload.php';

use App\Remessa\Campo;
use App\Remessa\Lines\LineHeaderArquivo;
use App\Remessa\Lines\LineHeaderLote;
use App\Remessa\Lines\LineP;
use App\Remessa\Lines\LineQ;
use App\Remessa\Lines\LineTrailerArquivo;
use App\Remessa\Lines\LineTrailerLote;
use App\Remessa\Lines\LineY03;
use App\Remessa\Remessa;

$remessa = new Remessa();

$line_h_arquivo = new LineHeaderArquivo();
$line_h_arquivo->setDataGeracaoArquivo(22112022);
$line_h_arquivo->setNumeroSequencialArquivo(1);

$line_h_lote = new LineHeaderLote();
$line_h_lote->setNumeroRemessaRetorno(1);
$line_h_lote->setDataGravacaoRemessaRetorno(22112022);

$remessa->addLines($line_h_arquivo, $line_h_lote);

$line_p = new LineP();
$line_p->setNumeroSequencialRegistroLote(1);
$line_p->setValorNominalBoleto(100);
$line_p->setIdentificacaoBoletoNoBanco(2211936912);
$line_p->setNumeroDocumento(123);//id fatura
$line_p->setDataVencimentoBoleto(30112022);
$line_p->setDataEmissaoBoleto(22112022); //pegar do banco
$line_p->setValorNominalBoleto(6000);
$line_p->setDataJurosMora(30112022);//igual o vencimento

$line_q = new LineQ();
$line_q
    ->setNumeroSequencialRegistroLote(2)
    ->setTipoInscricaoPagador(1)
    ->setNumeroInscricaoPagador("08948842471")
    ->setNomePagador("WARGAS DELMONDES TEIXEIRA")
    ->setEnderecoPagador("Rua Prefeito Pedro, 950")
    ->setBairroPagador('Centro')
    ->setCepPagador("56180")
    ->setSufixoCepPagador("000")
    ->setCidadePagador('Cabrobo')
    ->setUnidadeFederacaoPagador('PE');

$line_y = new LineY03();
$line_y->setNumeroSequencialRegistroLote(3);
$line_y->setIdentificacaoBoletoNoBanco(2211936912);

$remessa
    ->addLine($line_p)
    ->addLine($line_q)
    ->addLine($line_y);


$line_t_lote = new LineTrailerLote();
$line_t_lote->setQuantidadeRegistrosLote(5);

$line_t_arquivo = new LineTrailerArquivo();
$line_t_arquivo->setQuantidadeLotesArquivo(1);
$line_t_arquivo->setQuantidadeRegistrosArquivo(7);

$remessa->addLines($line_t_lote, $line_t_arquivo);

$remessa->download("remessa");

$remessa->writeFile("remessa-2.txt");
