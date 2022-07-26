<div class="panel panel-danger" id="panel_formaatuacao">
    <div class="panel-heading">
        <h3 class="panel-title">
       Forma de Atuação? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('formaatuacao'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('formaatuacao'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($formas as $sn) : ?>
            <div class="radio">
                
                    <label>
                        <?php
                            $val_fv = $this->form_validation->set_value('formaatuacao');
                            $form_formaatuacao = !empty($val_fv) ? $val_fv : (isset($_POST['formaatuacao']) ? $_POST['formaatuacao'] : null);
                            if ($form_formaatuacao == $sn['id']) {
                                $checked = ' checked="checked"';
                            } else {
                                $checked = "";
                            }
                        ?>
                        <input type="radio" class="icheck formaatuacao" name="formaatuacao" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                        <span><?php echo $sn['descricao'] ?></span>
                    </label>
                
            </div>
        <?php endforeach; ?>

        <div id="formaatuacao_erro" class="formaatuacao_erro"></div>
        
    </div>

</div>

<!-- PANEL GROUP -->

<div class="panel-group" id="panelgrp_outraforma" style="display:none;">
    <div class="panel panel-warning" id="panel_outraforma">
        <div class="panel-heading">
            <h3 class="panel-title">
            Se "Outra Forma de Atuação" Qual? 
            </h3>
        </div>

        <div class="panel-body">

            <?php if (!empty(form_error('outraforma'))) : ?>

                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo form_error('qtdpresencial'); ?>
                </div>

            <?php endif; ?>

            <div class="form-group">
            <?php echo form_label(' ', 'outraforma', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?php echo form_input($outraforma); ?>
            </div>
        </div>

            <div id="outraforma_erro" class="outraforma_erro"></div>

        </div>
    </div>
    
    
</div>