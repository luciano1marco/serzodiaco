<div class="panel panel-primary" id="panel_temacesso">
    <div class="panel-heading">
        <h3 class="panel-title">
           A família tem acesso à internet?
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('temacesso'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('temacesso'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($simounao as $sn) : ?>
            <div class="radio">
                <label>
                    <?php
                    $val_fv = $this->form_validation->set_value('temacesso');
                    $form_temacesso = !empty($val_fv) ? $val_fv : isset($_POST['temacesso']) ? $_POST['temacesso'] : null;
                    if ($form_temacesso == $sn['id']) {
                        $checked = ' checked="checked"';
                    } else {
                        $checked = "";
                    }
                    ?>
                    <input type="radio" class="icheck" name="temacesso" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                    <span><?php echo $sn['nome'] ?></span>
                </label>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<!-- PANEL GROUP -->
<div class="panel-group" id="panelgrp_qtdacesso" style="display:none;">
    <div class="panel panel-danger" id="panel_qtdacesso">
        <div class="panel-heading">
            <h3 class="panel-title">
                De qual local a família acessa a internet?
            </h3>
        </div>

        <div class="panel-body">

            <?php if (!empty(form_error('qtdacesso'))) : ?>

                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo form_error('qtdacesso'); ?>
                </div>

            <?php endif; ?>

            <?php foreach ($qtdacesso as $acesso) : ?>
                <div class="radio">
                    <label>
                        <?php
                        $val_fv = $this->form_validation->set_value('qtdacesso');
                        $form_qtdacesso = !empty($val_fv) ? $val_fv : isset($_POST['qtdacesso']) ? $_POST['qtdacesso'] : null;
                        if ($form_qtdacesso == $acesso['id']) {
                            $checked = ' checked="checked"';
                        } else {
                            $checked = "";
                        }
                        ?>
                        <input type="radio" class="icheck" name="qtdacesso" <?php echo $checked; ?> value="<?php echo $acesso['id']; ?>" />
                        <span><?php echo $acesso['nome'] ?></span>

                    </label>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- PANEL2 GROUP -->
    <div class="panel panel-danger" id="panel_qtdacesso">
        <div class="panel-heading">
            <h3 class="panel-title">
               Qual tipo de internet a família tem acesso? 
            </h3>
        </div>

        <div class="panel-body">

            <?php if (!empty(form_error('qtdacesso'))) : ?>

                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo form_error('qtdacesso'); ?>
                </div>

            <?php endif; ?>

            <?php foreach ($qualacesso as $qacesso) : ?>
                <div class="radio">
                    <label>
                        <?php
                        $val_fv = $this->form_validation->set_value('qualacesso');
                        $form_qualacesso = !empty($val_fv) ? $val_fv : isset($_POST['qualacesso']) ? $_POST['qualacesso'] : null;
                        if ($form_qualacesso == $qacesso['id']) {
                            $checked = ' checked="checked"';
                        } else {
                            $checked = "";
                        }
                        ?>
                        <input type="radio" class="icheck" name="qualacesso" <?php echo $checked; ?> value="<?php echo $qacesso['id']; ?>" />
                        <span><?php echo $qacesso['nome'] ?></span>

                    </label>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- PANEL2 GROUP -->
