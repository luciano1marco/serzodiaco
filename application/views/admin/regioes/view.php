<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="content-wrapper">
    <section class="content-header">
        <?php echo $pagetitle; ?>
        <?php echo $breadcrumb; ?>
        <?php $anchor = 'admin/'.$this->router->class; ?>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                    <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $texto_view; ?></h3>
                    </div>
                    <div class="box-body">
                        <?php echo $message;?>

                        <?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form-create_user')); ?>
                            <?php echo form_hidden($id);?>
                            
                            <?php echo form_fieldset('Dados'); ?>

                            <div class="form-group">                                           
                                <?php echo form_label('Título', 'titulo', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">                                   
                                    <?php echo form_input($titulo);?>
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Tipo', 'tipo', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">                                   
                                    <?php echo form_input($tipo);?>
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Descrição', 'descricao', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_textarea($descricao);?>
                                </div>
                            </div>

                            <?php echo form_fieldset_close(); ?>
                            
                            <?php echo form_fieldset('Mapa'); ?>

                            <?php
                                echo form_input($latitude);
                                echo form_input($longitude);
                            ?>                           

                            <div class="form-group">                                           
                                <?php echo form_label('Polígono', 'poligono', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_textarea($poligono);?>
                                </div>
                            </div>

                            <div class="form-group"> 
                                <?php echo form_label('Mapa', 'mapa_div',array('class' => 'col-sm-2 control-label')); ?>       
                                <div class="col-sm-10">
                                    <div id="map"></div>
                                </div>
                            </div>

                            <?php echo form_fieldset_close('<hr>'); ?>
                           
                            <div class="form-group">
                                <?php echo form_label('Publicado', 'publicado', array('class' => 'col-sm-2 control-label')); ?>       
                                    
                                    <div class="col-sm-10">
                                        <?php echo form_checkbox($publicado);?>
                                    </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="btn-group">             
                                        <?php
                                        $edit   = '<i class="fa fa-edit"></i> <span>Editar</span>';
                                        $cancel = '<i class="fa fa-times"></i> <span>Cancelar</span>';       
                                        $group  = '<i class="fa fa-group"></i> <span>Grupos</span>';                                          
                                        ?>

                                        <?php echo anchor($anchor.'/edit/'.$id['id'], $edit, array('class' => 'btn btn-primary btn-flat')); ?>                                                                            
                                        <?php echo anchor($anchor.'/index/'.$id['id'], $cancel, array('class' => 'btn btn-default btn-flat')); ?>
                                                                            
                                    </div>
                                </div>
                            </div>
                        <?php echo form_close();?>
                    </div>
                </div>
                </div>
        </div>
    </section>
</div>


<div id="modal_delete" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atenção!</h4>
            </div>
      
        <div class="modal-body">
            <p>Deseja realmente excluir esse registro?</p>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger" id="btExcluirConfirmar">Excluir</button>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
$(document).ready(function() {
    initMap();
});
</script>