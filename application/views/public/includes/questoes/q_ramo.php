<div class="panel panel-danger" id="panel_ramo">
    <div class="panel-heading">
        <h3 class="panel-title">
       Qual seu ramo de atividade? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('ramo'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('ramo'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($ram as $sn) : ?>
            <div class="radio">
                
                    <label>
                        <?php
                            $val_fv = $this->form_validation->set_value('ramo');
                            $form_atividade = !empty($val_fv) ? $val_fv : (isset($_POST['ramo']) ? $_POST['ramo'] : null);
                            if ($form_atividade == $sn['id']) {
                                $checked = ' checked="checked"';
                            } else {
                                $checked = "";
                            }
                        ?>
                        <input type="radio" class="icheck ramo" name="ramo" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                        <span><?php echo $sn['descricao'] ?></span>
                    </label>
                
            </div>
        <?php endforeach; ?>

        <div id="ramo_erro" class="ramo_erro"></div>
        
    </div>

</div>

<!-- PANEL GROUP -->

<div class="panel-group" id="panelgrp_outroramo" style="display:none;">
    <div class="panel panel-warning" id="panel_outroramo">
        <div class="panel-heading">
            <h3 class="panel-title">
            Se "Outro" Qual?  
            </h3>
        </div>

        <div class="panel-body">

            <?php if (!empty(form_error('outroramo'))) : ?>

                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo form_error('outroramo'); ?>
                </div>

            <?php endif; ?>

            <div class="form-group">
            <?php echo form_label(' ', 'outroramo', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?php echo form_input($outroramo); ?>
            </div>
        </div>

            <div id="outroramo_erro" class="outroramo_erro"></div>

        </div>
    </div>
    
    
</div>