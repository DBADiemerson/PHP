<?php
//Strings
    $nome = "Hcode";

    echo 'ABC $nome'; //aspas simples, entende tudo como texto
    echo '<br/>';
    echo "ABC $nome"; //aspas duplas, permite a adição de veriáveis no texto
    echo '<br/>';


    //funções para string
    //maiusculo
    echo strtoupper($nome);
    echo '<br/>';
    //minúsculo
    echo strtolower($nome);
    echo '<br/>';

    $nomecompleto = "diemerson campos";
    //Primeira letra maiuscula
    echo ucfirst($nomecompleto);
    echo '<br/>';
    //primeira letra de cada palavra maiuscula
    echo ucwords($nomecompleto);
    echo '<br/>';
    //Substituir texto (texto que será substitido, texto que substituirá, string onde ocorrerá a substituição)
    echo str_replace("campos","santos",$nomecompleto);
    echo '<br/>';
    //Posição de um texto em uma string
    echo strpos($nomecompleto,"c");
    echo '<br/>';
     //Capturando texto até indice da string buscada
     $pos = strpos($nomecompleto,"c");
     echo substr($nomecompleto, 0, $pos);
     echo '<br/>';

     $buscar = "campos";
     $pos = strpos($nomecompleto,$buscar);
     //strlen retorna o tamanho da string
     echo substr($nomecompleto, $pos, strlen($buscar));
     echo '<br/>';

?>