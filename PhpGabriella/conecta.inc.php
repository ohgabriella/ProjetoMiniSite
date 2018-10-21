<?php
    //  
    $conexao = mysqli_connect("localhost", "root", "");
    
    //conectando ao BD criado
    $db = mysqli_select_db($conexao, "minisiteGabriella");

    //executando a query e retornando valores da tabela
    $query = mysqli_query($conexao, "SELECT * FROM faleconosco");
    
    /*
    //listando varios valores
    while($tabela = mysqli_fetch_array($query)){
        echo $tabela['nome']. "<br>";
        echo $tabela['email']. "<br>";
        echo $tabela['assunto']. "<br>";
        echo $tabela['mensagem'];

    }
     
     */
    
    
    
    ?>


