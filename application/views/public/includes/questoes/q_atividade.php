<div class="panel panel-danger" id="panel_atividade">
    <div class="panel-heading">
        <h3 class="panel-title">
       Qual sua atividade econômica? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('atividade'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('atividade'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($ativ as $sn) : ?>
            <div class="radio">
                
                    <label>
                        <?php
                            $val_fv = $this->form_validation->set_value('atividade');
                            $form_atividade = !empty($val_fv) ? $val_fv : (isset($_POST['atividade']) ? $_POST['atividade'] : null);
                            if ($form_atividade == $sn['id']) {
                                $checked = ' checked="checked"';
                            } else {
                                $checked = "";
                            }
                        ?>
                        <input type="radio" class="icheck atividade" name="atividade" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                        <span><?php echo $sn['descricao'] ?></span>
                    </label>
                
            </div>
        <?php endforeach; ?>

        <div id="atividade_erro" class="atividade_erro"></div>
        
    </div>

</div>

<!-- PANEL GROUP -->

<div class="panel-group" id="panelgrp_outraatividade" style="display:none;">
    <div class="panel panel-warning" id="panel_outraatividade">
        <div class="panel-heading">
            <h3 class="panel-title">
            Se "Outra Atividade Economica" Qual?  
            </h3>
        </div>

        <div class="panel-body">

            <?php if (!empty(form_error('outraatividade'))) : ?>

                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo form_error('outraatividade'); ?>
                </div>

            <?php endif; ?>

            <div class="form-group">
            <?php echo form_label(' ', 'outraatividade', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?php echo form_input($outraatividade); ?>
            </div>
        </div>

            <div id="outraatividade_erro" class="outraatividade_erro"></div>

        </div>
    </div>
    
    
</div>