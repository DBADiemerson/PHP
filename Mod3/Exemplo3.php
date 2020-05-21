<?php
    //Variáveis pré definidas e arrays super globais
    //executar no navegador http://localhost/variaveis/exemplo3.php?a=123 o ? é um divisor de url, a esquerda encontra-se o endereço do site e a direita a query.
    $nome = $_GET["a"];
    //no var_dump retornará string, porém se quer que retorne inteiro, declarar variável passando o tipo $nome = (int)$_get["a"];
    var_dump($nome);
    echo "<br/>";

    // quando precisa coletar mais variáveis, dividir com &,conforme URL http://localhost/variaveis/exemplo3.php?a=123&b=abc
    $nome = $_GET["b"];
    var_dump($nome);

    //Buscando IP do usuário
    $ip = $_SERVER["REMOTE_ADDR"];
    echo "<br/>";
    echo $ip;

?>

