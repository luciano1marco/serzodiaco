<div class="panel panel-danger" id="panel_negociocasa">
    <div class="panel-heading">
        <h3 class="panel-title">
        Seu Negócio funciona em casa? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('negociocasa'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('negociocasa'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($simounao as $sn) : ?>
            <div class="radio">
                <label>
                    <?php
                        $val_fv = $this->form_validation->set_value('negociocasa');
                        $form_negociocasa =!empty($val_fv) ? $val_fv : (isset($_POST['negociocasa']) ? $_POST['negociocasa'] : null);
                        //$form_negociocasa = $_POST['negociocasa'];
                        if ($form_negociocasa == $sn['id']) {
                            $checked = ' checked="checked"';
                        } else {
                            $checked = "";
                        }
                    ?>
                    <input type="radio" class="icheck negociocasa" name="negociocasa" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                    <span><?php echo $sn['nome'] ?></span>
                </label>
            </div>
        <?php endforeach; ?>

        <div id="negociocasa_erro" class="negociocasa_erro"></div>
        
    </div>

</div>

<!-- PANEL GROUP -->