<!-- PANEL -->
<div class="panel panel-danger" id="panel_email">
    <div class="panel-heading">
        <h3 class="panel-title">
            Nome do Negócio
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('nomenegocio'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('nomenegocio'); ?>
            </div>

        <?php endif; ?>
        <div class="form-group">
            <?php echo form_label(' ', 'nomenegocio', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?php echo form_input($nomenegocio); ?>
            </div>
        </div>

    </div>

</div>
<!-- PANEL -->