<?php
    require "exemplo8.php";//funciona semelhante ao include, porém exige que o arquivo exista e gera um erro fatal caso não encontre o arquivo, já o include, tenta funcionar caso não encontre o arquivo
    require_once "exemplo8.php"; //funciona como o require, porém evita o erro que ocorre quando um arquivo é chamado duas vezes.
    $resultado = somar(10,20);
    echo $resultado;
?>