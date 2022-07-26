<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="content-wrapper">
    
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                    <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Visualizar Questionário</h3>
                    </div>

                    <?php 
                    $filhoestudante_value = isset($filhoestudante_value) ? $filhoestudante_value : null;
                    $vctrabalha_value = isset($vctrabalha_value) ? $vctrabalha_value : null;
                    $vcestuda_value = isset($vcestuda_value) ? $vcestuda_value : null;

                    $faixaetaria_value = isset($faixaetaria_value) ? $faixaetaria_value : null;
                    $rendafamiliar_value = isset($rendafamiliar_value) ? $rendafamiliar_value : null;
                    $deficiente_value = isset($deficiente_value) ? $deficiente_value : null;
                    $sexo_value = isset($sexo_value) ? $sexo_value : null;

                    $qtdfilhos_value = isset($qtdfilhos_value) ? $qtdfilhos_value : null;
                    $filhotransporte_value = isset($filhotransporte_value) ? $filhotransporte_value : null;

                    $ocupacao_value = isset($ocupacao_value) ? $ocupacao_value : null;
                    $localsaidatrabalho_value = isset($localsaidatrabalho_value) ? $localsaidatrabalho_value : null;
                    $deslocamentolongo_value = isset($deslocamentolongo_value) ? $deslocamentolongo_value : null;
                    $trabalhadortransporte_value = isset($trabalhadortransporte_value) ? $trabalhadortransporte_value : null;
                    $deslocamentolongo_value = isset($deslocamentolongo_value) ? $deslocamentolongo_value : null;

                    $localensino_value = isset($localensino_value) ? $localensino_value : null;
                    $nivelensino_value = isset($nivelensino_value) ? $nivelensino_value : null;
                    $localsaidaaula_value = isset($localsaidaaula_value) ? $localsaidaaula_value : null;
                    $deslocamentoaula_value = isset($deslocamentoaula_value) ? $deslocamentoaula_value : null;
                    $estudantetransporte_value = isset($estudantetransporte_value) ? $estudantetransporte_value : null;
                                       
                    $sexo_value = isset($sexo_value) ? $sexo_value : null;
                    $sexo_value = isset($sexo_value) ? $sexo_value : null;



                    $message = null;
                    $id = null;

                    ?>

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#principal">Principal</a></li>                      
                        <li><a data-toggle="tab" href="#filhoestudante">Filho(s) Estudante(s)</a></li>                                           
                        <li><a data-toggle="tab" href="#vctrabalha">Você Trabalha</a></li>                                            
                        <li><a data-toggle="tab" href="#vcestuda">Você Estuda</a></li>                       
                    </ul>

                    <div class="box-body">
                        <?php echo $message;?>

                        <?php echo form_open(current_url(), array('class' => 'form-horizontal', 'id' => 'form-create_user')); ?>
                            <?php echo form_hidden($id);?>
                        <!-- BEGIN TAB -->
                        <div class="tab-content">
                            
                            <div id="principal" class="tab-pane fade in active">

                            <?php echo form_fieldset('Dados Principais'); ?>
                                                                
                            <div class="form-group">                                           
                                <?php echo form_label('Faixa Etaria', 'faixaetaria', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($faixaetaria as $faixa):?>                                                        
                                            <?php 
                                            if ($faixaetaria_value == $faixa['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio-inline">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="faixaetaria" <?php echo $checked; ?> value="<?php echo $faixa['id'];?>" />
                                                <span> <?php echo $faixa['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Faixa de Renda', 'rendafamiliar', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($faixarenda as $faixa):?>                                                        
                                            <?php 
                                            if ($rendafamiliar_value == $faixa['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="rendafamiliar" <?php echo $checked; ?> value="<?php echo $faixa['id'];?>" />
                                                <span> <?php echo $faixa['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Possui Deficiência', 'deficiencia', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($simounao as $sn):?>     
                                            <?php 
                                            if ($deficiente_value == $sn['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>       
                                            <div class="radio-inline">     
                                                <input type="radio" disabled="disabled" class="icheck" name="deficiente" <?php echo $checked; ?> value="<?php echo $sn['id'];?>" />                                                                                                    
                                                <span> <?php echo $sn['nome'] ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Sexo Biologico', 'sexo', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($sexo as $sex):?>
                                            <?php 
                                            if ($sexo_value == $sex['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>       
                                            <div class="radio-inline">     
                                                <input type="radio" disabled="disabled" class="icheck" name="sexo" <?php echo $checked; ?> value="<?php echo $sex['id'];?>" />                                                                                                    
                                                <span> <?php echo $sex['nome'] ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <?php echo form_fieldset_close(); ?>

                            <?php echo form_fieldset('Endereço'); ?>

                            <div class="form-group">                                           
                                <?php echo form_label('Rua', 'rua', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_input($rua);?>
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Bairro', 'bairro', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_input($bairro);?>
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Cidade', 'cidade', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_input($cidade);?>
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('CEP', 'cep', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_input($cep);?>
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Estado', 'estado', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_dropdown($estado);?>
                                </div>
                            </div>

                            <?php echo form_fieldset_close(); ?>

                            <?php echo form_fieldset('Informações Especiais'); ?>

                            <div class="form-group">                                           
                                <?php echo form_label('Tem Filho(s) Estudante(s)', 'temfilhoestudante', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($simounao as $sn):?>     
                                            <?php 
                                            if ($filhoestudante_value == $sn['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>       
                                            <div class="radio-inline">     
                                                <input type="radio" disabled="disabled" class="icheck" name="temfilhoestudante" <?php echo $checked; ?> value="<?php echo $sn['id'];?>" />                                                                                                    
                                                <span> <?php echo $sn['nome'] ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Você Trabalha?', 'vctrabalha', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($simounao as $sn):?>     
                                            <?php 
                                            if ($vctrabalha_value == $sn['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>       
                                            <div class="radio-inline">     
                                                <input type="radio" disabled="disabled" class="icheck" name="vctrabalha" <?php echo $checked; ?> value="<?php echo $sn['id'];?>" />                                                                                                    
                                                <span> <?php echo $sn['nome'] ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Você Estuda', 'vcestuda', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($simounao as $sn):?>     
                                            <?php 
                                            if ($vcestuda_value == $sn['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>       
                                            <div class="radio-inline">     
                                                <input type="radio" disabled="disabled" class="icheck" name="vcestuda" <?php echo $checked; ?> value="<?php echo $sn['id'];?>" />                                                                                                    
                                                <span> <?php echo $sn['nome'] ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <?php echo form_fieldset_close(); ?>

                            </div>
                            <!-- END TAB -->

                            <div id="filhoestudante" class="tab-pane fade">
                                
                            <?php echo form_fieldset('Dados dos Filho(s)'); ?>

                            <div class="form-group">                                           
                                <?php echo form_label('Quantidade de Filho(s)', 'qtdfilhos', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($qtdfilhos as $filhos):?>                                                        
                                            <?php 
                                            if ($qtdfilhos_value == $filhos['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio-inline">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="qtdfilhos" <?php echo $checked; ?> value="<?php echo $filhos['id'];?>" />
                                                <span> <?php echo $filhos['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Escola Filho(s)', 'escolafilho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_input($escolafilho);?>
                                </div>
                            </div>
                            
                            <?php echo form_fieldset_close(); ?>

                            <?php echo form_fieldset('Transporte'); ?>

                            <div class="form-group">                                           
                                <?php echo form_label('Meio de Transporte', 'transportefilhoescola', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($transportes as $transp):?>                                                        
                                            <?php 
                                            if ($filhotransporte_value == $transp['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="transportefilhoescola" <?php echo $checked; ?> value="<?php echo $transp['id'];?>" />
                                                <span> <?php echo $transp['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <!-- Campos Extras de Acordo com o Transporte -->
                            <?php if($filhotransporte_value == 'ciclista'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Local da Bicicleta', 'localbikefilho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($localbike as $bike):?>                                                        
                                        <?php 
                                        if ($localbikefilho_value == $bike['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="localbikefilho" <?php echo $checked; ?> value="<?php echo $bike['id'];?>" />
                                            <span> <?php echo $bike['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($filhotransporte_value == 'onibus_1linha'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Linha do Ônibus', 'linhaonibusfilho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($linhaonibusfilho);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Tempo no Deslocamento', 'tempoonibusfilho1', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($deslocamento_filho as $des):?>                                                        
                                        <?php 
                                        if ($tempodeslocamentofilho_value == $des['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="tempoonibusfilho1" <?php echo $checked; ?> value="<?php echo $des['id'];?>" />
                                            <span> <?php echo $des['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($filhotransporte_value == 'onibus_2linha'): ?>

                            <div class="form-group">                                           
                            <?php echo form_label('Ônibus 1ª Linha', 'linhaonibus1filho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($linhaonibus1filho);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Ônibus 2ª Linha', 'linhaonibus2filho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($linhaonibus2filho);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Ponto de Troca de ônibus', 'trocalinhaonibusfilho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($trocalinhaonibusfilho);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Tempo no Deslocamento', 'tempoonibusfilho2', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($deslocamento_filho as $des):?>                                                        
                                        <?php 
                                        if ($tempodeslocamentofilho_value == $des['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="tempoonibusfilho2" <?php echo $checked; ?> value="<?php echo $des['id'];?>" />
                                            <span> <?php echo $des['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            
                            <?php endif; ?>

                            <?php if($filhotransporte_value == 'carro_motorista' OR $filhotransporte_value == 'carro_passageiro'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Local do Carro', 'localcarrofilho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($localcarro as $carro):?>                                                        
                                        <?php 
                                        if ($localcarrofilho_value == $carro['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="localcarrofilho" <?php echo $checked; ?> value="<?php echo $carro['id'];?>" />
                                            <span> <?php echo $carro['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($filhotransporte_value == 'carro_taxi'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Usa APP de Taxi', 'localbikefilho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($simounao as $sn):?>                                                        
                                        <?php 
                                        if ($apptaxifilho_value == $sn['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="apptaxifilho" <?php echo $checked; ?> value="<?php echo $sn['id'];?>" />
                                            <span> <?php echo $sn['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($filhotransporte_value == 'carro_app'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Qual APP', 'apptranspfilho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($apptranspfilho);?>                                            
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($filhotransporte_value == 'outros'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Outros Quais?', 'outrotranspfilho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($outrotranspfilho);?>                                            
                                </div>
                            </div>
                            <?php endif; ?>


                            <?php echo form_fieldset_close(); ?>
                                    
                            </div>
                            <!-- END TAB -->

                            <div id="vctrabalha" class="tab-pane fade">

                            <?php echo form_fieldset('Dados do Trabalhador'); ?>

                            <div class="form-group">                                           
                                <?php echo form_label('Ocupação', 'ocupacao', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($ocupacao as $job):?>                                                        
                                            <?php 
                                            if ($ocupacao_value == $job['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="ocupacao" <?php echo $checked; ?> value="<?php echo $job['id'];?>" />
                                                <span> <?php echo $job['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Hora de Inicio', 'horainiciotrabalho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($horainiciotrabalho);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Hora de Termino', 'horaterminotrabalho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($horaterminotrabalho);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Local de Saída do Trabalho', 'localsaidatrabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($localsaidatrabalho as $saida):?>                                                        
                                            <?php 
                                            if ($localsaidatrabalho_value == $saida['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="localsaidatrabalho" <?php echo $checked; ?> value="<?php echo $saida['id'];?>" />
                                                <span> <?php echo $saida['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Tempo de Deslocamento', 'tempodeslocamentotrabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($deslocamentolongo as $deslocamento):?>                                                        
                                            <?php 
                                            if ($deslocamentolongo_value == $deslocamento['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="tempodeslocamentotrabalho" <?php echo $checked; ?> value="<?php echo $deslocamento['id'];?>" />
                                                <span> <?php echo $deslocamento['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <?php echo form_fieldset_close(); ?>

                            <?php echo form_fieldset('Endereço'); ?>

                            <div class="form-group">                                           
                                <?php echo form_label('Rua', 'rua_trabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_input($rua_trabalho);?>
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Bairro', 'bairro_trabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_input($bairro_trabalho);?>
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Cidade', 'cidade_trabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_input($cidade_trabalho);?>
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('CEP', 'cep_trabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_input($cep_trabalho);?>
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Estado', 'estado_trabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php echo form_dropdown($estado_trabalho);?>
                                </div>
                            </div>

                            <?php echo form_fieldset_close(); ?>

                            <?php echo form_fieldset('Transporte'); ?>

                            <div class="form-group">                                           
                                <?php echo form_label('Meio de Transporte', 'transportetrabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($transportes as $transp):?>                                                        
                                            <?php 
                                            if ($trabalhadortransporte_value == $transp['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="transportetrabalho" <?php echo $checked; ?> value="<?php echo $transp['id'];?>" />
                                                <span> <?php echo $transp['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <!-- Campos Extras de Acordo com o Transporte -->
                            <?php if($trabalhadortransporte_value == 'ciclista'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Local da Bicicleta', 'localbiketrabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($localbike as $bike):?>                                                        
                                        <?php 
                                        if ($localbiketrabalho_value == $bike['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="localbiketrabalho" <?php echo $checked; ?> value="<?php echo $bike['id'];?>" />
                                            <span> <?php echo $bike['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($trabalhadortransporte_value == 'onibus_1linha'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Linha do Ônibus', 'linhaonibustrabalho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($linhaonibustrabalho);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Tempo no Deslocamento', 'tempoonibustrabalho1', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">                                          
                                    <?php foreach ($deslocamento_trabalho as $des):?>                                                                                          
                                        <?php                                     
                                        if ($tempodeslocamentotrabalho_value == $des['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }                                                  
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="tempoonibustrabalho1" <?php echo $checked; ?> value="<?php echo $des['id'];?>" />
                                            <span> <?php echo $des['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($trabalhadortransporte_value == 'onibus_2linha'): ?>

                            <div class="form-group">                                           
                            <?php echo form_label('Ônibus 1ª Linha', 'linhaonibus1trabalho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($linhaonibus1trabalho);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Ônibus 2ª Linha', 'linhaonibus2trabalho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($linhaonibus2trabalho);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Ponto de Troca de ônibus', 'trocalinhaonibustrabalho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($trocalinhaonibustrabalho);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Tempo no Deslocamento', 'tempoonibustrabalho2', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($deslocamento_trabalho as $des):?>                                                        
                                        <?php 
                                        if ($tempodeslocamentotrabalho_value == $des['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="tempoonibustrabalho2" <?php echo $checked; ?> value="<?php echo $des['id'];?>" />
                                            <span> <?php echo $des['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            
                            <?php endif; ?>

                            <?php if($trabalhadortransporte_value == 'carro_motorista' OR $trabalhadortransporte_value == 'carro_passageiro'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Local do Carro', 'localcarrotrabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($localcarro as $carro):?>                                                        
                                        <?php 
                                        if ($localcarrotrabalho_value == $carro['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="localcarrotrabalho" <?php echo $checked; ?> value="<?php echo $carro['id'];?>" />
                                            <span> <?php echo $carro['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($trabalhadortransporte_value == 'carro_taxi'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Usa APP de Taxi', 'apptaxitrabalho', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($simounao as $sn):?>                                                        
                                        <?php 
                                        if ($apptaxitrabalho_value == $sn['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="apptaxitrabalho" <?php echo $checked; ?> value="<?php echo $sn['id'];?>" />
                                            <span> <?php echo $sn['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($trabalhadortransporte_value == 'carro_app'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Qual APP', 'apptransptrabalho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($apptransptrabalho);?>                                            
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($trabalhadortransporte_value == 'outros'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Outros Quais?', 'outrotransptrabalho', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($outrotransptrabalho);?>                                            
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php echo form_fieldset_close(); ?>
                            
                            </div>
                            <!-- END TAB -->

                            <div id="vcestuda" class="tab-pane fade">
                            <?php echo form_fieldset('Dados do Estudante'); ?>

                            <div class="form-group">                                           
                                <?php echo form_label('Local de Ensino', 'localensino', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($localensino as $ensino):?>                                                        
                                            <?php 
                                            if ($localensino_value == $ensino['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="localensino" <?php echo $checked; ?> value="<?php echo $ensino['id'];?>" />
                                                <span> <?php echo $ensino['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Qual a Escola/Faculdade', 'escolavcestuda', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($escolavcestuda);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Nível de Ensino', 'nivelensino', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($nivelensino as $nivel):?>                                                        
                                            <?php 
                                            if ($nivelensino_value == $nivel['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="nivelensino" <?php echo $checked; ?> value="<?php echo $nivel['id'];?>" />
                                                <span> <?php echo $nivel['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Hora de Inicio', 'horainicioaula', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($horainicioaula);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Hora de Termino', 'horaterminoaula', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($horaterminoaula);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Local de Saída para a Aula', 'nivelensino', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($localsaidaaula as $saida):?>                                                        
                                            <?php 
                                            if ($localsaidaaula_value == $saida['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="localsaidaaula" <?php echo $checked; ?> value="<?php echo $saida['id'];?>" />
                                                <span> <?php echo $saida['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>

                            <div class="form-group">                                           
                                <?php echo form_label('Tempo de Deslocamento', 'tempodeslocamentoaula', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($deslocamentolongo as $deslocamento):?>                                                        
                                            <?php 
                                            if ($deslocamentoaula_value == $deslocamento['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="tempodeslocamentoaula" <?php echo $checked; ?> value="<?php echo $deslocamento['id'];?>" />
                                                <span> <?php echo $deslocamento['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>
                            
                            <?php echo form_fieldset_close(); ?>

                            <?php echo form_fieldset('Transporte'); ?>

                            <div class="form-group">                                           
                                <?php echo form_label('Meio de Transporte', 'transporteaula', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                        <?php foreach ($transportes as $transp):?>                                                        
                                            <?php 
                                            if ($estudantetransporte_value == $transp['id']) {
                                                $checked = ' checked="checked"';
                                            }
                                            else{
                                                $checked = "";
                                            }
                                            ?>
                                            <div class="radio">                                              
                                                <input type="radio" disabled="disabled" class="icheck" name="transporteaula" <?php echo $checked; ?> value="<?php echo $transp['id'];?>" />
                                                <span> <?php echo $transp['nome']; ?></span>
                                            </div>
                                        <?php endforeach; ?>
                                    
                                </div>
                            </div>
                            
                            <!-- Campos Extras de Acordo com o Transporte -->
                            <?php if($estudantetransporte_value == 'ciclista'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Local da Bicicleta', 'localbikeaula', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($localbike as $bike):?>                                                        
                                        <?php 
                                        if ($localbikeaula_value == $bike['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="localbikeaula" <?php echo $checked; ?> value="<?php echo $bike['id'];?>" />
                                            <span> <?php echo $bike['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($estudantetransporte_value == 'onibus_1linha'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Linha do Ônibus', 'linhaonibusaula', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($linhaonibusaula);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Tempo no Deslocamento', 'tempoonibusaula1', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">                                          
                                    <?php foreach ($deslocamento_aula as $des):?>                                                                                          
                                        <?php                                     
                                        if ($tempodeslocamentoaula_value == $des['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }                                                  
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="tempoonibusaula1" <?php echo $checked; ?> value="<?php echo $des['id'];?>" />
                                            <span> <?php echo $des['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($estudantetransporte_value == 'onibus_2linha'): ?>

                            <div class="form-group">                                           
                            <?php echo form_label('Ônibus 1ª Linha', 'linhaonibus1aula', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($linhaonibus1aula);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Ônibus 2ª Linha', 'linhaonibus2aula', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($linhaonibus2aula);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Ponto de Troca de ônibus', 'trocalinhaonibusaula', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($trocalinhaonibusaula);?>                                            
                                </div>
                            </div>

                            <div class="form-group">                                           
                            <?php echo form_label('Tempo no Deslocamento', 'tempoonibusaula2', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($deslocamento_aula as $des):?>                                                        
                                        <?php 
                                        if ($tempodeslocamentoaula_value == $des['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="tempoonibusaula2" <?php echo $checked; ?> value="<?php echo $des['id'];?>" />
                                            <span> <?php echo $des['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            
                            <?php endif; ?>

                            <?php if($estudantetransporte_value == 'carro_motorista' OR $estudantetransporte_value == 'carro_passageiro'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Local do Carro', 'localcarroaula', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($localcarro as $carro):?>                                                        
                                        <?php 
                                        if ($localcarroaula_value == $carro['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="localcarroaula" <?php echo $checked; ?> value="<?php echo $carro['id'];?>" />
                                            <span> <?php echo $carro['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($estudantetransporte_value == 'carro_taxi'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Usa APP de Taxi', 'apptaxiaula', array('class' => 'col-sm-2 control-label')); ?>       

                                <div class="col-sm-10">
                                    <?php foreach ($simounao as $sn):?>                                                        
                                        <?php 
                                        if ($apptaxiaula_value == $sn['id']) {
                                            $checked = ' checked="checked"';
                                        }
                                        else{
                                            $checked = "";
                                        }
                                        ?>
                                        <div class="radio">                                              
                                            <input type="radio" disabled="disabled" class="icheck" name="apptaxiaula" <?php echo $checked; ?> value="<?php echo $sn['id'];?>" />
                                            <span> <?php echo $sn['nome']; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($estudantetransporte_value == 'carro_app'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Qual APP', 'apptranspaula', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($apptranspaula);?>                                            
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($estudantetransporte_value == 'outros'): ?>
                            <div class="form-group">                                           
                            <?php echo form_label('Outros Quais?', 'outrotranspaula', array('class' => 'col-sm-2 control-label')); ?>       
                                                                            
                                <div class="col-sm-10">
                                    <?php echo form_input($outrotranspaula);?>                                            
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php echo form_fieldset_close(); ?>
                                                    
                            <!-- END TAB -->
                            </div>

                                                                
                        <?php echo form_close();?>
                    </div>
                </div>
                </div>
        </div>
    </section>
</div>


<div id="modal_delete" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atenção!</h4>
            </div>
      
        <div class="modal-body">
            <p>Deseja realmente excluir esse registro?</p>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger" id="btExcluirConfirmar">Excluir</button>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->