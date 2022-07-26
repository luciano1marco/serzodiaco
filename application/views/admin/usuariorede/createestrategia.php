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
                        <h3 class="box-title"><?php echo "Nova Estrategia" ?></h3>
                    </div>
                    <div class="box-body">
                        <?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form-create_pessoas')); ?>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="idunidades">Unidade</label>
                            <div class="col-sm-8">
                                <?php echo form_dropdown($idunidades); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="descricao">Descrição</label>
                            <div class="col-sm-8">
                                <?php echo form_textarea($descricao); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="idapoiador">Apoiador</label>
                            <div class="col-sm-8">
                                <?php echo form_dropdown($idapoiador); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="dataregistro">Data de Registro</label>
                            <div class="col-sm-2">
                                <?php echo form_input($dataregistro); ?>
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