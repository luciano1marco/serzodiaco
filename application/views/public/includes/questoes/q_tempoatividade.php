<div class="panel panel-danger" id="panel_tempoatividade">
    <div class="panel-heading">
        <h3 class="panel-title">
       Há quanto tempo você exerce essa atividade? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('tempoatividade'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('tempoatividade'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($tempo as $sn) : ?>
            <div class="radio">
                
                    <label>
                        <?php
                            $val_fv = $this->form_validation->set_value('tempoatividade');
                            $form_tempoatividade =!empty($val_fv) ? $val_fv : (isset($_POST['tempoatividade']) ? $_POST['tempoatividade'] : null);
                            if ($form_tempoatividade == $sn['id']) {
                                $checked = ' checked="checked"';
                            } else {
                                $checked = "";
                            }
                        ?>
                        <input type="radio" class="icheck tempoatividade" name="tempoatividade" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                        <span><?php echo $sn['descricao'] ?></span>
                    </label>
                
            </div>
        <?php endforeach; ?>

        <div id="tempoatividade_erro" class="tempoatividade_erro"></div>
        
    </div>

</div>

<!-- PANEL GROUP -->

