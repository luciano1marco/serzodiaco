<div class="panel panel-primary" id="panel_eq_prevencao">
    <div class="panel-heading">
        <h3 class="panel-title">
        Você tem fácil acesso aos equipamentos/produtos de prevenção contra a COVID-19? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('eq_prevencao'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('eq_prevencao'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($eq_prevencao as $sn) : ?>
            <div class="radio">
                <label>
                    <?php
                    $val_fv = $this->form_validation->set_value('eq_prevencao');
                    $form_eq_prevencao = !empty($val_fv) ? $val_fv : isset($_POST['eq_prevencao']) ? $_POST['eq_prevencao'] : null;
                    if ($form_eq_prevencao == $sn['id']) {
                        $checked = ' checked="checked"';
                    } else {
                        $checked = "";
                    }
                    ?>
                    <input type="radio" class="icheck" name="eq_prevencao" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                    <span><?php echo $sn['nome'] ?></span>
                </label>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<!-- PANEL GROUP -->