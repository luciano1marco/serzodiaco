<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="content-wrapper">
    <section class="content-header">
        <?php echo $pagetitle; ?>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo "Novo PTS" ?></h3>
                    </div>
                    <div class="box-body">
                        <?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form-create_pessoas')); ?>

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
                        
                            <label class="col-sm-2 control-label" for="tipo">Parentesco</label>
                            <div class="col-sm-2">
                                <?php echo form_dropdown($tipo); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="unidade">Cuidador(a)</label>
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


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="btn-group">
                                    <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => lang('actions_submit'))); ?>
                                    <?php echo form_button(array('type' => 'reset', 'class' => 'btn btn-warning btn-flat', 'content' => lang('actions_reset'))); ?>
                                    <?php echo anchor('admin/usuariorede', lang('actions_cancel'), array('class' => 'btn btn-default btn-flat')); ?>
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