<!-- PANEL -->
<div class="panel panel-danger" id="panel_cnpj">
    <div class="panel-heading">
        <h3 class="panel-title">
            CNPJ
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('cnpj'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('cnpj'); ?>
            </div>

        <?php endif; ?>
        <div class="panel-group" id="panelgrp_cnpj" ></div>
            <?php echo form_label(' ', 'cnpj', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-2">
                <?php echo form_input($cnpj); ?>
            </div>
       

    </div>

</div>
<!-- PANEL -->