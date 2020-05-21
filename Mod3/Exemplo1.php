<?php
    //variáveis devem ser declaradas com $ no início e não precisam de um tipo e não podem começar com números após o $, também não podem usar nomes reservados
    $nome = "Hcode"; //Variavel do tipo string
    $site = 'www.hcode.com.br'; // Variavel do tipo string com aspas simples
    $ano = 2020; //número inteiro
    $salario = 5500.99; //número real
    $bloqueado = 0; //Booleano, pode ser 0 ou 1

    $frutas = array("abacaxi", "laranja", "Melancia"); //Variável de tipo array, PHP permite um array que recebe dados de tipos diferente, como todos os array a primeira posição é 0
    $nascimento = new Datetime(); //Variável do tipo objeto, sempre que houver um new, sabe-se que está utilizando programação orientada a objeto

    $arquivo = fopen("exemplo2.php","r"); //Variável do tipo resource que recebe um arquivo lido do disco através da função fopen()
    $nulo = null //Variável com valor nulo


    //Imprime variável
    echo $nome;

    //Quebra linha
    echo "<br/>";

    //Imprime valor em um array
    echo $frutas[2];
    
    echo "<br/>";

    //mostra detalhes da variável como tipo, número de carcateres e conteúdo
    var_dump($nome);

    echo "<br/>";
    var_dump($frutas);

    echo "<br/>";
    var_dump($nascimento);

    echo "<br/>";
    var_dump($arquivo);

    //unset remove variável, retira variável pode remover mais de uma unsert($variavel1, $var2, $var3)
    unset($nome);

    //pode-se testar a existência de uma variável existe para tentar imprimí-la utilizando a função isset() em um if
    if(isset($nome))
    {
        echo $nome;
    }    

    echo "<br/>";

    //Quando for utilizar uma variável que poderia ser já declarada, para não trazer lixo, o ideal é removêla com unset e depois declará-la novamente
    $nome = 123;

    echo $nome;

    echo "<br/>";
    unset($nome);

    $nome = "Diemerson";
    $sobrenome = "Campos";

    //Concatenando variáveis ., também é possível concatenar com + , porém se há o problema de tentar somar caso haja um numérico.
    $nomecompleto = $nome." ".$sobrenome;

    echo $nomecompleto;

    //Encerra execução do PHP
    exit;

?>