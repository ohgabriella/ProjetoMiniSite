<?php
echo '<div class="espacotopo">
<div class="centralizar">
        <div class= "col-md-8">
		  <div class="container">
			<div>  <h4 class="text-center ">Entre em contato!</h4> </div>

				<form action="?pg=contatobd" method="post">
					<div class="form-group">
					<label>Nome: </label>
					<input class="form-control" type="text" name="nome">
					</div>
						
					<div class="form-group">
					<label>E-mail: </label>
					<input class="form-control" type="text" name="email">
					</div>

					<div class="form-group">
					<label>Assunto: </label>
					<select class="form-control" type="text" name="assunto">
						<option>Dúvidas</option>
						<option>Sugestão</option>
						<option>Reclamação</option>
						<option>Elogios</option>
					</select>
					</div>

					<divclass="form-group">
					<label>Mensagem: </label>
					<textarea class="form-control" type="text" name="mensagem"></textarea> 
					</div>
					<button class="btn text-white" style="background-color: #6f42c1" >Enviar</button> 
		  </div>	
	    </div>
	  </div> 
	  </div> 
	'

?>
