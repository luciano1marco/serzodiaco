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
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3 align="center">Imagens</h3>
							</div>
						</div>
					</div>
					<div class="box-header with-border">
						<h3 class="box-title"><?php echo anchor($anchor . '/create', '<i class="fa fa-plus"></i> ' . $texto_btn_create, array('class' => 'btn btn-block btn-success btn-flat')); ?></h3>
					</div>
					<div class="box-body">
						<table class="table table-striped table-hover datatable">
							<thead>
								<tr>
									<!--<th>ID</th>-->
									<th>Nome</th>
									<th>caminho</th>
									<th>tipo</th>
									<th>Ação</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($imagem as $ima) : ?>
									<tr>
										<td><?php echo htmlspecialchars($ima['nome'], ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($apa['caminho'], ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($apa['tipo'], ENT_QUOTES, 'UTF-8'); ?></td>
										<!-- Opções -->
										<td>
											<?php echo anchor($anchor . '/edit/' . $apa['id'], "<button class=\"btn btn-danger\"><i class=\"fa fa-pencil\"></i> Editar</button>"); ?>
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