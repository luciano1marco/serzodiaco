<div class="panel panel-danger" id="panel_termo">
    <div class="panel-heading">
        
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('termo'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('termo'); ?>
            </div>

        <?php endif; ?>

        <?php foreach ($ver as $sn) : ?>
            <div class="radio">
                <label>
                    <?php
                        $val_fv = $this->form_validation->set_value('termo');
                        $form_negociocasa = !empty($val_fv) ? $val_fv : (isset($_POST['termo']) ? $_POST['termo'] : null);
                        if ($form_negociocasa == $sn['id']) {
                            $checked = ' checked="checked"';
                        } else {
                            $checked = "";
                        }
                    ?>
                    <input type="radio" class="icheck termo" name="termo" <?php echo $checked; ?> value="<?php echo $sn['id']; ?>" />
                    <span><?php echo $sn['nome'] ?></span>
                </label>
            </div>
        <?php endforeach; ?>

        <div id="termo_erro" class="termo_erro"></div>
        
    </div>

</div>

<!-- PANEL GROUP -->
<div class="panel-group" id="panelgrp_termo1" style="display:none;">
    <div class="panel panel-warning" id="panel_termo1">
        <div class="panel-heading">
            <h3 class="panel-title">
            Ao enviar este formulário, declaro para os devidos fins, que autorizo o uso da minha imagem, em caráter gratuito, pela Rede Mulheres Empreendedoras do Rio Grande, para uso e produção de conteúdo, para serem utilizadas integralmente ou em parte, com citação de meu nome, nas condições originais da captação das imagens, sem restrição de prazos, até a presente data. Esta autorização se refere a fotos ou imagens em vídeo, com ou sem captação de som, produzidas pela Secretaria de Comunicação e Relações Institucionais da Prefeitura Municipal do Rio Grande, para serem veiculadas em mídias eletrônicas e impressas. A presente autorização não permite a modificação das imagens, dos textos, adições, ou qualquer mudança, que altere o sentido das mesmas, ou que desrespeite a inviolabilidade da imagem das pessoas, previsto no inciso X do Art. 5º da Constituição da República Federativa do Brasil e no art. 20 da Lei nº 10.406, de 2002 – Código Civil Brasileiro.
            </h3>
        </div>

        <div class="panel-body">

            <?php if (!empty(form_error('termo1'))) : ?>

                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo form_error('termo1'); ?>
                </div>

            <?php endif; ?>
            
            <div class="form-group">
            <?php echo form_label('', 'termo', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
              <?php echo form_checkbox('termo', '1', FALSE, 'id="termo"'); ?>&nbsp;&nbsp;&nbsp;<?php echo 'Por favor, confirme que você concorda com nossos Termos'; ?>
            </div>
        </div>
            <div id="termo1_erro" class="termo1_erro"></div>

        </div>
    </div>
</div>