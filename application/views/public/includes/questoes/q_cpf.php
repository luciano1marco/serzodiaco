<!-- PANEL -->
<div class="panel panel-danger" id="panel_email">
    <div class="panel-heading">
        <h3 class="panel-title">
            CPF
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('cpf'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('cpf'); ?>
            </div>

        <?php endif; ?>
        <div class="panel-group" id="panelgrp_cpf" ></div>
            <?php echo form_label(' ', 'cpf', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-2">
                <?php echo form_input($cpf); ?>
            </div>
        

    </div>

</div>
<!-- PANEL -->