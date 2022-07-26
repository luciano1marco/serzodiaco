<div class="panel panel-primary" id="panel_nao_presencial">
    <div class="panel-heading">
        <h3 class="panel-title">
        Qual é a melhor maneira para os(as) estudantes acessarem as atividades não presenciais?
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('npresencial'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('npresencial'); ?>
            </div>

        <?php endif; ?>

        <div class="form-group">
            <label class="col-sm-4 control-label" for="escolas">Selecione a(s) atividade(s) Não Presencial(is)</label>
            <div class="col-sm-6">
                <select class="mdb-select colorful-select dropdown-primary md-form" id="id" name="npresencial[]" multiple searchable="Search here.." />
                    <option value = <?php echo form_dropdown($npresencial);?></option>
                </select>   
            </div>
        </div>
       
    </div>

</div>

<!-- PANEL GROUP -->