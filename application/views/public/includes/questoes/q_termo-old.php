<!-- PANEL -->
<div class="panel panel-danger" id="panel_termo">
    <div class="panel-heading">
        
        <?php foreach ($sosim as $sn) : ?>
            <div class="checkbox">
                <label>
                    <?php
                        $val_fv = $this->form_validation->set_value('termo');
                        $form_termo = !empty($val_fv) ? $val_fv : isset($_POST['termo']) ? $_POST['termo'] : null;
                        if ($form_termo == $sn['id']) {
                            $checked = ' checked="checked"';
                        } else {
                            $checked = "";
                        }
                    ?>
                    <input type="checkbox" class="icheck termo" name="termo" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                    <span><?php echo $sn['nome'] ?></span>
                </label>
            </div>
        <?php endforeach; ?>
    </div>
                    


    <div class="panel-body">

        <?php if (!empty(form_error('termo'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('termo'); ?>
            </div>

        <?php endif; ?>
        <div class="form-group">
            <?php echo form_label('', 'termo', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
              <?php echo form_checkbox('termo', '1', FALSE, 'id="termo"'); ?>&nbsp;&nbsp;&nbsp;<?php echo 'Por favor, confirme que você concorda com nossos Termos'; ?>
            </div>
        </div>

    </div>

</div>
<!-- PANEL GROUP -->
<div class="panel-group" id="panelgrp_termo" style="display:none;">
    <div class="panel panel-warning" id="panel_termo">
        <div class="panel-heading">
            <h3 class="panel-title">
            Outras Redes Sociais
            </h3>
        </div>

       
    </div>
</div>