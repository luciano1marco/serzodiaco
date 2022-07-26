<div class="panel panel-primary" id="panel_qts_est">
    <div class="panel-heading">
        <h3 class="panel-title">
        Quantos(as) estudantes há no seu núcleo familiar?   </h3>
    </div>
    

    <div class="panel-body">

        <?php if (!empty(form_error('qts_est'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('qts_est'); ?> 
            </div>

        <?php endif; ?>

        <?php foreach ($qts_est as $sn) : ?>
            <div class="radio-inline">
                <label>
                    <?php
                    $val_fv = $this->form_validation->set_value('qts_est');
                    $form_qts_est = !empty($val_fv) ? $val_fv : isset($_POST['qts_est']) ? $_POST['qts_est'] : null;
                    if ($form_qts_est == $sn['id']) {
                        $checked = ' checked="checked"';
                    } else {
                        $checked = "";
                    }
                    ?>
                    <input type="radio" class="icheck" name="qts_est" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                    <span><?php echo $sn['nome'] ?></span>
                </label>
            </div>
        <?php endforeach; ?>
       
    </div>
   
</div>

<!-- PANEL GROUP -->