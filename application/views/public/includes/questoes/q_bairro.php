<!-- PANEL -->
<div class="panel panel-danger" id="panel_email">
    <div class="panel-heading">
        <h3 class="panel-title">
            Bairro
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('bairro'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('bairro'); ?>
            </div>

        <?php endif; ?>
        <div class="form-group">
            <?php echo form_label(' ', 'bairro', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?php echo form_input($bairro); ?>
            </div>
        </div>

    </div>

</div>
<!-- PANEL -->