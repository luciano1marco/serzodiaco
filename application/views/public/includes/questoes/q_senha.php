<!-- PANEL -->
<div class="panel panel-danger" id="panel_email">
    <div class="panel-heading">
        <h3 class="panel-title">
            Senha
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('senha'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('senha'); ?>
            </div>

        <?php endif; ?>
        <div class="form-group">
            <?php echo form_label('Senha', 'password', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?php echo form_input($password);?>
                <div class="progress" style="margin:0">
                    <div class="pwstrength_viewport_progress"></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <?php echo form_label('Confirme a senha', 'password_confirm', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?php echo form_input($password_confirm);?>
            </div>
        </div>
    </div>

</div>
<!-- PANEL -->
