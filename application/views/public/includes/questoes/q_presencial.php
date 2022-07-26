<div class="panel panel-primary" id="panel_tempresencial">
    <div class="panel-heading">
        <h3 class="panel-title">
        Você está trabalhando de forma presencial? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('tempresencial'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('tempresencial'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($simounao as $sn) : ?>
            <div class="radio">
                <label>
                    <?php
                    $val_fv = $this->form_validation->set_value('tempresencial');
                    $form_tempresencial = !empty($val_fv) ? $val_fv : isset($_POST['tempresencial']) ? $_POST['tempresencial'] : null;
                    if ($form_tempresencial == $sn['id']) {
                        $checked = ' checked="checked"';
                    } else {
                        $checked = "";
                    }
                    ?>
                    <input type="radio" class="icheck" name="tempresencial" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                    <span><?php echo $sn['nome'] ?></span>
                
                </label>
            </div>
        <?php endforeach; ?>
      
    </div>

</div>

<!-- PANEL GROUP -->
<div class="panel-group" id="panelgrp_qtdpresencial" style="display:none;">
    <div class="panel panel-danger" id="panel_qtdpresencial">
        <div class="panel-heading">
            <h3 class="panel-title">
            Se você está trabalhando, com quem ou onde os(as) estudantes estão ficando? 
            </h3>
        </div>

        <div class="panel-body">

            <?php if (!empty(form_error('qtdpresencial'))) : ?>

                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo form_error('qtdpresencial'); ?>
                </div>

            <?php endif; ?>

            <?php foreach ($qtdpresencial as $presencial) : ?>
                <div class="radio">
                    <label>
                        <?php
                        $val_fv = $this->form_validation->set_value('qtdpresencial');
                        $form_qtdpresencial = !empty($val_fv) ? $val_fv : isset($_POST['qtdpresencial']) ? $_POST['qtdpresencial'] : null;
                        if ($form_qtdpresencial == $presencial['id']) {
                            $checked = ' checked="checked"';
                        } else {
                            $checked = "";
                        }
                        ?>
                        <input type="radio" class="icheck qtdpresencial" name="qtdpresencial" <?php echo $checked; ?> value="<?php echo $presencial['id']; ?>" />
                        <span><?php echo $presencial['nome'] ?></span>

                    </label>
                </div>
            <?php endforeach; ?>

            <div id="qtdpresencial_erro" class="qtdpresencial_erro"></div>

        </div>
    </div>
    
    
</div>
<!-- PANEL2 GROUP -->
