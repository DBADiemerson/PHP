<?php

    $nome = "diemerson";
    //criando função, a função executa em um escopo, portanto, se quiser utilizar algo que está fora, esta deve ser chamada dentro da função passando a referência global
    function teste()
    {
        global $nome; //informa que a nome dentro da função, é a variável que está fora.
        echo $nome;
    }

    teste();

    echo "<br/>";

    function teste2()
    {
        global $nome2; //informa que a nome dentro da função, é a variável que está fora.
        $nome2 = "diemerson2";
    }

    teste2();
    echo $nome2;
?>