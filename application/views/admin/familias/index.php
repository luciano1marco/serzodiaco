<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<div class="content-wrapper">
	<section class="content-header">
		<?php $icon = '<i class="fa fa-' . $pageicon . '"></i>'; ?>
		<?php echo $pagetitle; ?>
		<?php echo $breadcrumb; ?>
		<?php $anchor = 'admin/' . $this->router->class; ?>
		<?php $anchor1 = 'admin/pessoas'?>
		
	</section>


	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3 align="center">
									<?php foreach ($socio as $f) : ?>
										<?php echo htmlspecialchars($f['nome'], ENT_QUOTES, 'UTF-8'); ?>
									<?php endforeach; ?>
								</h3>
							</div>
						</div>
					</div>
					<div class="box-header with-border">
						<?php  $cancel = '<i class="fa fa-reply"></i> Voltar';?>
                                   
						<h3 class="box-title">
							<?php echo anchor($anchor . '/create/'.$f['id'], '<i class="fa fa-plus"></i> ' . 'Adicionar Parente', array('class' => 'btn btn-block btn-orange btn-flat')); ?>
						</h3>
						
						<h3 class="box-title">
						&nbsp;&nbsp;&nbsp;&nbsp;
							<?php echo anchor($anchor1, $cancel, array('class' => 'btn btn-default btn-flat')); ?>
						</h3>          
					</div>
					<div class="box-body">

						<table class="table table-striped table-hover datatable">
							<thead>
								<tr>
									<!--<th>ID</th>-->
									<th>Nome</th>
									<th>Grau Parentesco</th>
									<th>Açoes</th>
								</tr>
							</thead>

							<tbody>
								<?php foreach ($familia as $i) : ?>
									<?php
                                     $visualiza = '<i class="fa fa-trash"></i> <span>Excluir</span>';
                                      ?>
									<tr>
										<td><?php echo htmlspecialchars($i['parente'], ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($i['descricao'], ENT_QUOTES, 'UTF-8'); ?></td>
										<!-- Opções -->                                            
										<td>
											<?php echo anchor($anchor.'/edit/'.$i['id'], "<button class=\"btn btn-orange\"><i class=\"fa fa-pencil\"></i> Editar</button>"); ?>&nbsp;&nbsp;&nbsp;&nbsp;
											<?php echo anchor($anchor.'/view/'.$i['id'], "<button class=\"btn btn-orange\"><i class=\"fa fa-search\"></i> Visualizar</button>"); ?>
											
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
