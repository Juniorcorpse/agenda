<!doctype html>
<html language="pt-br">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<head>
		<title>ArthWorks</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/js/datatables/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/js/datatables/css/responsive.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/js/datatables/css/style_dataTable.css">
		
		<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/css/auxiliar.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/grade.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>assets/css/style.css">		
		
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<script src="<?= URL_BASE ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript">
			var base_url = "<?= url(); ?>";
		
		
		</script>	
	</head>
	<body class="base-login">
    	<div class="rows mx-0" >	
			<div class="col-4 m-auto" >	
				<div class="caixa p-4 pb-4 position-relative">
					<img src="<?= url('assets/img/logo.png'); ?>" width='250' class="m-auto d-block">
					<?php 
						$this->verErro();
						$this->verMsg();
					;?>
					<form action="<?= url('login/logar'); ?>" method="post">
						<h1 class="text-center mt-2">login</h1>
						<label class="mb-2 d-block"> <span class="text-label label">Login</span> 
						<input	type="text" name="login" value="" class="form-campo">
						</label> <label  class="mb-2 d-block"> <span class="text-label label">Senha</span> 
						<input	type="password" name="senha" value="" class="form-campo">
						</label> <input type="submit" value="Entrar" class="btn btn-amarelo d-table m-auto width-100 h5">
					</form>	
					<a href="" class="senha text-azul mt-3 d-block">Esqueci minha senha</a>
											
					<div class="mostraCampo">
					<div class="caixa">
						<span class="text-right sair senha">X</span>
						<h1 class="text-center h3 mb-0 pb-1">Esqueci minha senha </h1>
						<p class="text-center pb-4">Digite seu email no campo abaixo para recuperar sua senha</p>
						<form action="" id="form" method="post">
							<label class="mb-2 d-block">
								<input type="text" value="" placeholder="Inserir email" class="form-campo">
							</label>
							<label class="mb-2 d-block">	
							<input type="submit" value="Enviar" class="btn form-campo d-table m-auto width-100 h5">			
							</label >							
							
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
			
		 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>		
		<script src="https://kit.fontawesome.com/9480317a2f.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/datatables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/datatables/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo URL_BASE ?>assets/js/componentes/js_data_table.js"></script>					
		<script src="<?php echo URL_BASE ?>assets/js/js.js"></script>
		
	</body>
</html>