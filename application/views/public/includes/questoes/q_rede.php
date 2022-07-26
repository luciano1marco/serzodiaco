<div class="panel panel-danger" id="panel_rede">
    <div class="panel-heading">
        <h3 class="panel-title">
        Quais redes sociais você utiliza no seu negócio? Se SIM, deixe o link nos espaços que abriram abaixo!
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('rede'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('rede'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($simounao as $sn) : ?>
            <div class="radio">
                <label>
                    <?php
                        $val_fv = $this->form_validation->set_value('rede');
                        $form_negociocasa = !empty($val_fv) ? $val_fv : (isset($_POST['rede']) ? $_POST['rede'] : null);
                        if ($form_negociocasa == $sn['id']) {
                            $checked = ' checked="checked"';
                        } else {
                            $checked = "";
                        }
                    ?>
                    <input type="radio" class="icheck rede" name="rede" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                    <span><?php echo $sn['nome'] ?></span>
                </label>
            </div>
        <?php endforeach; ?>

        <div id="rede_erro" class="rede_erro"></div>
        
    </div>

</div>

<!-- PANEL GROUP -->
<div class="panel-group" id="panelgrp_outrarede" style="display:none;">
    <div class="panel panel-warning" id="panel_outrarede">
        <div class="panel-heading">
            <h3 class="panel-title">
            Outras Redes Sociais
            </h3>
        </div>

        <div class="panel-body">

            <?php if (!empty(form_error('outrarede'))) : ?>

                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo form_error('outroramo'); ?>
                </div>

            <?php endif; ?>

            <div class="form-group">
                <?php echo form_label('Instagram', 'instagram', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-6">
                    <?php echo form_input($instagram); ?>
                </div>
            </div>
            <div class="form-group">
                <?php echo form_label('Facebook', 'facebook', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-6">
                    <?php echo form_input($facebook); ?>
                </div>
            </div>
            <div class="form-group">
                <?php echo form_label('Whatsapp', 'whatsapp', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-6">
                    <?php echo form_input($whatsapp); ?>
                </div>
            </div>
            <div class="form-group">
                <?php echo form_label('Site', 'site', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-6">
                    <?php echo form_input($site); ?>
                </div>
            </div>
            <div class="form-group">
                <?php echo form_label('Outras redes', 'outras', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-6">
                    <?php echo form_input($outras); ?>
                </div>
            </div>
            <div id="outrarede_erro" class="outrarede_erro"></div>

        </div>
    </div>
</div>