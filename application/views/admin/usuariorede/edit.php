<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>


<div class="content-wrapper">
    <section class="content-header">
        <?php echo $pagetitle; ?>
        <?php echo $breadcrumb; ?>
        <?php $anchor = 'admin/' . $this->router->class; ?>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo "Editar Usuário da Rede" ?></h3>
                    </div>
                    <div class="box-body">
                        <?php echo $message; ?>
                        <?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form-create_eixo')); ?>
                        <?php echo form_hidden($id); ?>
                        
                        <?php echo form_fieldset('Dados'); ?>
                       
                            <div class="form-group">
                            <label class="col-sm-2 control-label" for="nome">Nome</label>
                            <div class="col-sm-5">
                                <?php echo form_input($nome); ?>
                            </div>
                       
                            <label class="col-sm-2 control-label" for="datanasc">Data de Nascimento</label>
                            <div class="col-sm-2">
                                <?php echo form_input($datanasc); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="endereco">Endereço</label>
                            <div class="col-sm-5">
                                <?php echo form_input($endereco); ?>
                            </div>
                        
                            <label class="col-sm-2 control-label" for="telefone">Telefone</label>
                            <div class="col-sm-2">
                                <?php echo form_input($telefone); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="responsavel">Responsavel</label>
                            <div class="col-sm-5">
                                <?php echo form_input($responsavel); ?>
                            </div>
                        
                            <label class="col-sm-2 control-label" for="tipo">Tipo</label>
                            <div class="col-sm-2">
                                <?php echo form_dropdown($descricao); ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="unidade">Apoiador</label>
                            <div class="col-sm-5">
                                <?php echo form_dropdown ($idapoiador); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="foco">Foco Principal</label>
                            <div class="col-sm-9">
                                <?php echo form_textarea($foco); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="justificativa">Justificativa</label>
                            <div class="col-sm-9">
                                <?php echo form_textarea($justificativa); ?>
                            </div>
                        </div>

                        <?php echo form_fieldset_close(); ?>   
                          
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="btn-group">
                                    <?php
                                    $submit = '<i class="fa fa-check"></i> <span>Enviar</span>';
                                    $edit = '<i class="fa fa-edit"></i> <span>Editar</span>';
                                    $redo = '<i class="fa fa-refresh"></i> <span>Reiniciar</span>';
                                    $delete = '<i class="fa fa-trash"></i> <span>Excluir</span>';
                                    $cancel = '<i class="fa fa-times"></i> <span>Cancelar</span>';
                                    ?>

                                    <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => $submit)); ?>
                                    <?php echo form_button(array('type' => 'reset', 'class' => 'btn btn-warning btn-flat', 'content' => $redo)); ?>
                                    <?php echo form_button(array('type' => 'button', 'class' => 'btn btn-danger btn-flat', 'content' => $delete, "id" => "btExcluir")); ?>
                                    <?php echo anchor($anchor, $cancel, array('class' => 'btn btn-default btn-flat')); ?>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
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
                <h4 class="modal-title"><b>Atenção!</b></h4>
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