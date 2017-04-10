<?php

require '../controle/autenticacao.php';
require_once '../classes/Aluno.php';
require_once '../classes/Teste.php';

$teste = new Teste();
$mostrar_teste = $teste->ler_teste();

$correcao = array("teste_1" => "a", "teste_2" => "a", "teste_3" => "a", "teste_4" => "a", "teste_5" => "a", "teste_6" => "a", "teste_7" => "a", "teste_8" => "a", "teste_9" => "a", "teste_10" => "a");
$array = json_decode(json_encode($mostrar_teste), true);
$contador = 0;

var_dump($array);

echo '<br>Busca<br>';

for ($i = 0; $i < count($array); $i++) {
    for ($j = 1; $j <= 10; $j++) {
        if ($array[$i]["teste_" . $j] == $correcao["teste_" . $j]) {
            $contador++;
        }
    }
    echo 'acertos = ' . $contador;
    echo '<br>';
    $contador = 0;
}


