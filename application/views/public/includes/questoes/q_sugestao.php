<div class="panel panel-primary" id="panel_sugestao">
    <div class="panel-heading">
        <h3 class="panel-title">
        Você tem alguma sugestão que possa contribuir para o retorno às atividades escolares, levando em consideração a valorização da vida, a compreensão do lugar da escola como melhor lugar para aprender e a garantia de acesso a todos, independente da sua condição financeira e humana?
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('sugestao'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('sugestao'); ?>
            </div>

        <?php endif; ?>
        <div class="form-group">
            <?php echo form_label('Sugestao', 'sugestao', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?php echo form_input($sugestao); ?>
            </div>
        </div>

    </div>

</div>

<!-- PANEL GROUP -->

<!-- PANEL GROUP -->