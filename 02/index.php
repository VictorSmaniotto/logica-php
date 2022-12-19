<?php

//UNIDADES DE MEDIDAS VÁLIDAS PARA O SISTEMA
$unidades = [
    'mm' => 1,
    'cm' => 10,
    'm' => 1000,
    'km' => 1000000
];



//TEXTO DAS UNIDADES VÁLIDAS
$unidadesValidas = implode(', ', array_keys($unidades)); #Pega só as keys do array separando por ,

do{
    //SOLICITA A UNIDADE BASE PARA O USUÁRIO
    $unidadeBase = readline('Digite a unidade base ('.$unidadesValidas.'): ');

    //MENSAGEM DE ERRO DE UNIDADE
    if(!isset($unidades[$unidadeBase])){
        echo "Unidade inválida!\n\n";
    }
}while(!isset($unidades[$unidadeBase]));

do{
    //SOLICITA O VALOR DA UNIDADE BASE PARA O USUÁRIO
    $valorBase = readline('Digite o valor base: ');

    //MENSAGEM DE ERRO DO VALOR 
    if(!is_numeric($valorBase)){
        echo "Valor inválido!\n\n";
    }
}while(!is_numeric($valorBase));


//VALOR EM MILÍMETROS
$valorMilimetro = $valorBase * $unidades[$unidadeBase];


echo "\nResultados: \n";

//IMPRIME AS UNIDADES DO SISTEMA
foreach($unidades as $unidade => $divisor){
    //IGNORA A IMPRESSAO DA UNIDADE BASE
    if($unidade == $unidadeBase) continue; #continue ignora a iteração atual e continua o código, neste caso, por exemplo, quando selecionar cm a sequencia será mm, m, km

    //IMPRIME O VALOR CORRESPONDENTE NA UNIDADE
    echo " > ".($valorMilimetro / $divisor)." ".$unidade."\n";
}

