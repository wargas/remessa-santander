Nota 1: LOTE DE SERVIÇO / NÚMERO DO LOTE DE REMESSA / RETORNO 
 
Identifica um Lote de Serviço.Criado e controlado pelo responsável pela geração magnética dos dados contidos no arquivo. 
Preencher com ‘0001’ para o primeiro lote do arquivo, mantendo seqüencial crescente para os demais (número do lote 
anterior acrescido de 1). O número não poderá ser repetido dentro do arquivo. 
Se registro for Header do Arquivo preencher com ‘0000’ 
Se registro for Trailer do Arquivo preencher com ‘9999’ 
 
 

REGISTRO DETALHE - SEGMENTO Q      REMESSA 
setCodigoBancoCompensacao;codigo_banco_compensacao;N;3
setNumeroLoteRemessa;numero_lote_remessa;N;4
setTipoRegistro;tipo_registro;N;1
setNumeroSequencialRegistroNoLote;numero_sequencial_registro_no_lote;N;5
setCodigoSegmentoRegistroDetalhe;codigo_segmento_registro_detalhe;A;1
setReservado1;reservado_1;A;1
setCodigoMovimentoRemessa;codigo_movimento_remessa;N;2
setTipoInscricaoPagador;tipo_inscricao_pagador;N;1
setNumeroInscricaoPagador;numero_inscricao_pagador;N;15
setNomePagador;nome_pagador;A;40
setEnderecoPagador;endereco_pagador;A;40
setBairroPagador;bairro_pagador;A;15
setCepPagador;cep_pagador;N;5
setSufixoCepPagador;sufixo_cep_pagador;N;3
setCidadePagador;cidade_pagador;A;15
setUnidadeFederacaoPagador;unidade_federacao_pagador;A;2
setTipoInscricaoBeneficiarioFinal;tipo_inscricao_beneficiario_final;N;1
setNumeroInscricaoBeneficiarioFinal;numero_inscricao_beneficiario_final;N;15
setNomeBeneficiarioFinal;nome_beneficiario_final;A;40
setReservado2;reservado_2;N;3
setReservado3;reservado_3;N;3
setReservado4;reservado_4;N;3
setReservado5;reservado_5;N;3
setReservado6;reservado_6;A;19

REGISTRO DETALHE - SEGMENTO R      REMESSA 
setCodigoBancoCompensacao;codigo_banco_compensacao;N;3
setNumeroLoteRemessa;numero_lote_remessa;N;4
setTipoRegistro;tipo_registro;N;1
setNumeroSequencialRegistroLote;numero_sequencial_registro_lote;N;5
codigoSegmentoRegistroDetalhe;codigoSegmentoRegistroDetalhe;1
setReservado7;reservado_7;A;1
setCodigoMovimento;codigo_movimento;N;2
setCodigoDesconto2;codigo_desconto_2;N;1
setDataDesconto2;data_desconto_2;N;8
setValorPercentualASerConcedido;valor_percentual_a_ser_concedido;N;15
setCodigoDesconto3;codigo_desconto_3;N;1
setDataDesconto3;data_desconto_3;N;8
setValorPercentualASerConcedido;valor_percentual_a_ser_concedido;N;15
setCodigoMulta;codigo_multa;N;1
setDataMulta;data_multa;N;8
setValorPercentualASerAplicado;valor_percentual_a_ser_aplicado;N;15
setReservado8;reservado_8;A;10
setMensagem3;mensagem_3;A;40
setMensagem4;mensagem_4;A;40
setReservado;reservado;A;61

REGISTRO DETALHE - SEGMENTO S      REMESSA 
setCodigoBancoCompensacao;codigo_banco_compensacao;N;3
setNumeroLoteRemessa;numero_lote_remessa;N;4
setTipoRegistro;tipo_registro;N;1
setNumeroSequencialRegistroLote;numero_sequencial_registro_lote;N;5
setCodigoSegmentoRegistroDetalhe;codigo_segmento_registro_detalhe;A;1
setReservado9;reservado_9;A;1
setCodigoMovimento;codigo_movimento;N;2
setIdentificacaoImpressao;identificacao_impressao;N;1
setNumeroLinhaASerImpressa;numero_linha_a_ser_impressa;N;2
setMensagemParaReciboPagador;mensagem_para_recibo_pagador;N;1
setMensagemASerImpressa;mensagem_a_ser_impressa;A;100
setReservado10;reservado_10;A;119


TRAILER DE LOTE REMESSA 
setCodigoBancoCompensacao;codigo_banco_compensacao;N;3
setNumeroLoteRemessa;numero_lote_remessa;N;4
setTipoRegistro;tipo_registro;N;1
setReservado11;reservado_11;N;9
setQuantidadeRegistrosLote;quantidade_registros_lote;N;6
setReservado12;reservado_12;A;217

TRAILER DE ARQUIVO REMESSA 
setCodigoBancoCompensacao;codigo_banco_compensacao;N;3
setNumeroLoteRemessa;numero_lote_remessa;N;4
setTipoRegistro;tipo_registro;N;1
setReservado13;reservado_13;N;9
setQuantidadeLotesArquivo;quantidade_lotes_arquivo;N;6
setQuantidadeRegistrosArquivo;quantidade_registros_arquivo;N;6
setReservado14;reservado_14;A;211


codigoBancoCompensacao;codigo_banco_compensacao;N;003
loteServico;lote_servico;N;004
tipoRegistro;tipo_registro;N;001
numeroSequencialRegistroLote;numero_sequencial_registro_lote;N;005
codigoSegmentoRegistroDetalhe;codigo_segmento_registro_detalhe;A;001
reservado1;reservado_1;A;001
codigoMovimentoRemessa;codigo_movimento_remessa;N;002
identificacaoRegistro;identificacao_registro;N;002
reservado2;reservado_2;A;061
tipoChavePix;tipo_chave_pix;A;001
chavePix;chave_pix;A;077
codigoIdentificacaoQrCode;codigo_identificacao_qr_code;A;035
reservado3;reservado_3;A;047