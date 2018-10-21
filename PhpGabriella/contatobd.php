<?php
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto=  $_POST['assunto'];
    $mensagem=  $_POST['mensagem'];

   if( $dados = mysqli_query($conexao,
        "INSERT INTO faleconosco (nome,email,assunto,mensagem) values('$nome', '$email','$assunto','$mensagem')"))
           {echo "<h3 class='centralizar espacoTopo'>Mensagem recebida! Entraremos em contato em breve (:</h3>";}
   else {
       echo "erro ao enviar o contato.";
   }

