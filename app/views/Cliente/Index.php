<section class="caixa">
				<div class="thead"><i class="ico lista"></i> Lista de contatos</div>
				<div class="base-lista">
			
					<div>
						<div class="text-end d-flex">
							<a href="<?= url('cliente/create')?>" class="btn d-inline-block mb-2 mx-1"><i class="fas fa fa-plus-circle" aria-hidden="true"></i> Cadastrar cliente</a>
							<a href="" class="btn btn-roxo d-inline-block mb-2 filtro"><i class="fas fa fa-filter" aria-hidden="true"></i> Filtrar</a>
						</div>
					</div>
					<div class="lst mostraFiltro">
						<form action="<?= url('cliente/filtro')?>" method="get">
						<div class="rows">
								<div class="col-4">
									<select name="campo">
										<option selected>Selecione o valor...</option>
										<option value="id_cliente">Código</option>
										<option value="cliente">Nome</option>
										<option value="email">Email</option>
										<option value="cidade">Cidade</option>
										<option value="estado">Site</option>
										<option value="celular">Fone</option>
									</select>
								</div>
								<div class="col-4">
									<input type="text"  name="valor" placeholder="Valor da pesquisar..." >
								</div>
								<div class="col-2">
									<input type="submit" class="btn" value="pesquisar">
									
								</div>
								<div class="col-2">
									
									<a href="<?= url('cliente')?>" class="btn">Limpar</a>
								</div>
						</div>
						</form>
					</div>
				<?= $this->verMsg(); ?>		
				<div class="tabela-responsiva">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" id="dataTable">
						<thead> 
						  <tr>
						  	<th align="left">ID</th>
							<th align="left">Nome</th>
							<th align="left">Email</th>
							<th align="center">Telefone</th>
							<th align="center">Ação</th>
						  </tr>
						</thead> 
						<tbody>
						<?php foreach($lista as $cliente):?>
							<tr>
								<td><?= $cliente->id_cliente;?></td>
								<td><?= $cliente->cliente;?></td>
								<td><?= $cliente->email;?></td>
								<td align="center"><?= $cliente->celular;?></td>
								<td align="center">
									<a href="<?= url("cliente/edit/{$cliente->id_cliente}");?>" class="btn btn-verde">Editar</a>
									<a href="javascript:;" onclick="return excluir(this)" data-entidade="cliente" data-id="<?= $cliente->id_cliente;?>" class="btn btn-vermelho">Excluir</a>
								</td>
							</tr>
							
							<?php endforeach; ?>					
						</tbody>
					 
					</table>
					</div>
				</div>
			</section>