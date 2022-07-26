<div class="panel panel-danger" id="panel_porte">
    <div class="panel-heading">
        <h3 class="panel-title">
       Qual o porte do seu negócio? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('porte'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('porte'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($port as $sn) : ?>
            <div class="radio">
                
                    <label>
                        <?php
                            $val_fv = $this->form_validation->set_value('porte');
                            $form_atividade = !empty($val_fv) ? $val_fv : (isset($_POST['porte']) ? $_POST['porte'] : null);
                            if ($form_atividade == $sn['id']) {
                                $checked = ' checked="checked"';
                            } else {
                                $checked = "";
                            }
                        ?>
                        <input type="radio" class="icheck porte" name="porte" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                        <span><?php echo $sn['descricao'] ?></span>
                    </label>
                
            </div>
        <?php endforeach; ?>

        <div id="porte_erro" class="porte_erro"></div>
        
    </div>

</div>

<!-- PANEL GROUP -->

<div class="panel-group" id="panelgrp_outroporte" style="display:none;">
    <div class="panel panel-warning" id="panel_outroporte">
        <div class="panel-heading">
            <h3 class="panel-title">
            Se "Outro" Qual?  
            </h3>
        </div>

        <div class="panel-body">

            <?php if (!empty(form_error('outroporte'))) : ?>

                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo form_error('outroporte'); ?>
                </div>

            <?php endif; ?>

            <div class="form-group">
            <?php echo form_label(' ', 'outroporte', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?php echo form_input($outroporte); ?>
            </div>
        </div>

            <div id="outroporte_erro" class="outroporte_erro"></div>

        </div>
    </div>
    
    
</div>