

<html>
     <body>
     <div class="container espacotopo">
      <h2 class="centralizar">Um pouco sobre nós</h2>
     
      <?php

      $query = mysqli_query($conexao, "SELECT * FROM quemsomos");
              
          

      while($tabela = mysqli_fetch_array($query)){
        echo $tabela['quemSomos']. "<br>";

      };

      ?>

      </div>
      
</body>
</html>

