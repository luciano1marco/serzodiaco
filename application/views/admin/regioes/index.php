<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="content-wrapper">
	<section class="content-header">       
		<?php $icon = '<i class="fa fa-'.$pageicon.'"></i>'; ?>                             
		<?php echo $pagetitle; ?>                   
		<?php echo $breadcrumb; ?>         
		<?php  $anchor = 'admin/'.$this->router->class; ?>
	</section>

	<div style="margin-top: 8px" id="alert_message">
    <?php
    if($this->session->userdata("message") != null)
    {
    ?>
        <div class="alert alert-info alert-dismissable" role="alert">
            <?php echo $this->session->userdata("message"); ?> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    }
    ?>
    </div>

	<section class="content">
		<div class="row">
			<div class="col-md-12">
					<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><?php echo anchor($anchor.'/create', '<i class="fa fa-plus"></i> '. $texto_btn_create, array('class' => 'btn btn-block btn-primary btn-flat')); ?></h3>
					</div>
					<div class="box-body">

					<table id="datatable" class="table table-striped table-hover">
							<thead>
								<tr>
									<!--<th>ID</th>-->
									<th>Título</th>	
									<th>Tipo</th>												
									<th>Publicado</th>		
									<th>Ação</th>														
								</tr>
							</thead>
							
							<tbody>
							
							<?php foreach ($regioes as $regiao):?>
								<tr>												
									<?php 
									$titulo = htmlspecialchars($regiao->titulo, ENT_QUOTES, 'UTF-8');																								
									//$id_check['value'] = $tipo_evento->id;
									?>

									<!--<td><?php echo form_checkbox($id_check);?></td>-->												
									<!--<td><?php echo $regiao; ?></td>-->
									<td><?php echo anchor($anchor.'/view/'.$regiao->id,$titulo); ?></td>
									
									<td><?php echo $regiao->tipo; ?></td>
									<td><?php echo ($regiao->publicado) ? anchor($anchor.'/deactivate/'.$regiao->id, '<span class="label label-success">SIM</span>') : anchor($anchor.'/activate/'. $regiao->id, '<span class="label label-default">NÃO</span>'); ?></td>
									
									<!-- Opções -->
									<td>
                                    	<?php echo anchor($anchor.'/edit/'.$regiao->id, "<button class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i> Editar</button>"); ?>
                                    	<span>&nbsp;</span>
                                    	<?php echo anchor($anchor.'/view/'.$regiao->id, "<button class=\"btn btn-primary\"><i class=\"fa fa-search\"></i> Ver</button>"); ?>                                   										
									</td>
									
								</tr>
							<?php endforeach;?>
							</tbody>
					</table>
						
					</div>
				</div>
				</div>
		</div>
	</section>
</div>
