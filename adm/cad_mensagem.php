﻿<?php
if(isset($_SESSION['usuarioNome'])){
	$usuario_logado=$_SESSION['usuarioNome'];
}else{
	header("Location: http://".$_SERVER['HTTP_HOST']."/adm/index.php");
	die();
}
?>
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Cadastrar Mensagem</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=26'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_cad_mensagem.php">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Assunto:</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="Assunto" placeholder="Nome Categoria">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Conteúdo Mensagem:</label>
			<div class="col-sm-10">
			  <textarea class="form-control ckeditor" rows="5" name="Mensagem" placeholder="Escreva sua Mensagem"></textarea>
			</div>
		  </div>

		   <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Data a enviar:</label>
			<div class="col-sm-10">
			  <input type="date" class="form-control" name="data_envio" >
			</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

