<div class="panel panel-primary" id="panel_epecial">
    <div class="panel-heading">
        <h3 class="panel-title">
        Os(as) estudantes fazem parte do público-alvo da Educação Especial do Sistema Municipal de Ensino? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('especial'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('especial'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($simounao as $sn) : ?>
            <div class="radio">
                <label>
                    <?php
                    $val_fv = $this->form_validation->set_value('especial');
                    $form_especial = !empty($val_fv) ? $val_fv : isset($_POST['especial']) ? $_POST['especial'] : null;
                    if ($form_especial == $sn['id']) {
                        $checked = ' checked="checked"';
                    } else {
                        $checked = "";
                    }
                    ?>
                    <input type="radio" class="icheck especial" name="especial" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                    <span><?php echo $sn['nome'] ?></span>
                </label>
            </div>
        <?php endforeach; ?>

        <div id="especial_erro" class="especial_erro"></div>
        
    </div>

</div>

<!-- PANEL GROUP -->