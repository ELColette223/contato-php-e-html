<?php

// Define as datas
$data_atual = date(‘d-m-Y h:i:s’);
$data_final = date(‘2012-12-21’);

// Converte as datas para a hora UNIX e realiza o calculo da diferenca
$diferenca = strtotime($data_final) – strtotime($data_atual);

// Exibe o resultado se ele for positivo. Caso seja negativo, exibe 0.
echo ($diferenca >= 0) ? $diferenca : 0;

?>