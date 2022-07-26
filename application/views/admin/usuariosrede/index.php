<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<div class="content-wrapper">
	<section class="content-header">
		<?php $icon = '<i class="fa fa-' . $pageicon . '"></i>'; ?>
		<?php echo $pagetitle; ?>
		<?php echo $breadcrumb; ?>
		<?php $anchor = 'admin/' . $this->router->class; ?>
	</section>


	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
					<div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 align="center">Usuários da Rede</h3>

                            </div>
                        </div>
						<!--<h3 class="box-title"><?php echo anchor($anchor . '/create', '<i class="fa fa-plus"></i> ' . $texto_btn_create, array('class' => 'btn btn-block btn-primary btn-flat')); ?></h3>
						-->
					</div>
					<div class="box-body">

						<table class="table table-striped table-hover datatable">
							<thead>
								<tr>
									<!--<th>ID</th>-->
									<th>Negocio</th>
									<th>Ramo do Negocio</th>
									<th>Endereço</th>
									<th>Nº</th>
									<th>Bairro</th>
									<th>Cidade</th>
									<th>Ação</th>
								</tr>
							</thead>

							<tbody>

								<?php foreach ($usuariorede as $apa) : ?>
									<tr>
										<td><?php echo htmlspecialchars($apa['nomenegocio'], ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($apa['descricaoramo'], ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($apa['logradouro'], ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($apa['numero'], ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($apa['bairro'], ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($apa['cid'], ENT_QUOTES, 'UTF-8'); ?></td>
										
										<!-- Opções -->
										<td>
											<?php echo anchor($anchor . '/view/' . $apa['id'], "<button class=\"btn btn-primary\"><i class=\"fa fa-search\"></i> Ver +</button>"); ?>
										</td>
									</tr>
								<?php endforeach; ?>

							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>