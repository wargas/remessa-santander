<?php

require './vendor/autoload.php';

use App\Remessa\Lines\LineHeaderArquivo;
use App\Remessa\Lines\LineHeaderLote;
use App\Remessa\Lines\LineP;
use App\Remessa\Lines\LineQ;
use App\Remessa\Remessa;

$remessa = new Remessa();

$line_h_lote = new LineHeaderLote();
$line_h_lote->build();

$line_h_arquivo = new LineHeaderArquivo();
$line_h_arquivo->build();

$line_p = new LineP();
$line_p->build();

$remessa
    ->addLines($line_h_arquivo)
    ->addLines($line_h_lote)
    ->addLines($line_p)
    ->addLines($line_p);

file_put_contents('remessa.txt', $remessa->getText());


