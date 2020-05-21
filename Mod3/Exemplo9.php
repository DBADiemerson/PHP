<?php
    include "exemplo8.php";//se o arquivo estiver em outro local
    //caso estivesse em uma pasta dentro do diretório include "pasta/exemplo8.php";
    //caso estivesse em uma pasta diferente dentro da mesma pasta pai dentro do diretório include "../pasta/exemplo8.php"; o .. sobe um diretório, se quiser subir 2 ../../pasta nesse caso é bom rever a estrutura
    //o include apresenta alguns recursos a mais que o require, por exemplo o include path, que pode ser configurado nos arquivo do php e faz com que ele busque os arquivos lá
    //porém se este recurso não for utilizado, melhor utilizar o require pq ele exige que o arquivo exista e que esteja funcionando.
    //outro recurso do include é que pode trazer algum arquivo remoto, que está em algum site

    $resultado = somar(10,20);
    echo $resultado;
?>