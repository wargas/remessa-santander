<?php

require './vendor/autoload.php';

use App\Remessa\Lines\LineHeaderArquivo;
use App\Remessa\Lines\LineHeaderLote;
use App\Remessa\Lines\LineP;
use App\Remessa\Lines\LineQ;
use App\Remessa\Lines\LineTrailerArquivo;
use App\Remessa\Lines\LineTrailerLote;
use App\Remessa\Remessa;

$remessa = new Remessa();

$line_h_lote = new LineHeaderLote();

$line_h_arquivo = new LineHeaderArquivo();

$line_p = new LineP();
$line_p->setValorNominalBoleto(100);
$line_p->setNumeroLoteRemessa(1);

$line_q = new LineQ();
$line_q
    ->setNumeroLoteRemessa(2)
    ->setNomePagador("WARGAS DELMONDES TEIXEIRA")
    ->setTipoInscricaoPagador(1)
    ->setNumeroInscricaoPagador("08948842471")
    ->setCepPagador("56180")
    ->setSufixoCepPagador("000")
    ->setBairroPagador('Centro')
    ->setCidadePagador('Cabrobo')
    ->setUnidadeFederacaoPagador('PE');


$line_t_arquivo = new LineTrailerArquivo();
$line_t_arquivo->setQuantidadeLotesArquivo(8);


$line_t_lote = new LineTrailerLote();
$line_t_lote->setQuantidadeRegistrosLote(6);


$remessa
    ->addLine($line_h_arquivo)
    ->addLine($line_h_lote)
    ->addLine($line_p)
    ->addLine($line_q)
    ->addLine($line_t_lote)
    ->addLine($line_t_arquivo);

file_put_contents('remessa.txt', $remessa->getText());


