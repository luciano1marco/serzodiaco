<div class="panel panel-primary" id="panel_derisco">
    <div class="panel-heading">
        <h3 class="panel-title">
        Os(as) estudantes que compõem o seu núcleo familiar fazem parte do grupo de risco da COVID-19? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('derisco'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('derisco'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($simounao as $sn) : ?>
            <div class="radio">
                <label>
                    <?php
                    $val_fv = $this->form_validation->set_value('derisco');
                    $form_temacesso = !empty($val_fv) ? $val_fv : isset($_POST['derisco']) ? $_POST['derisco'] : null;
                    if ($form_temacesso == $sn['id']) {
                        $checked = ' checked="checked"';
                    } else {
                        $checked = "";
                    }
                    ?>
                    <input type="radio" class="icheck" name="derisco" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                    <span><?php echo $sn['nome'] ?></span>
                </label>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<!-- PANEL GROUP -->