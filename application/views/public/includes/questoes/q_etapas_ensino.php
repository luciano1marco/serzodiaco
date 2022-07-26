<script>
  $(document).ready(function() {
      $('select').selectpicker();
});
</script>


<div class="panel panel-primary" id="panel_etapas_ensino">
    <div class="panel-heading">
        <h3 class="panel-title">
        Em qual(ais) etapa(s) de Ensino os(as) estudantes do seu núcleo familiar estão matriculados(as)?
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('etapas_ensino'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('etapas_ensino'); ?>
            </div>

        <?php endif; ?>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="etapas_ensino">Selecione a(s) Etapa(s)</label>
            <div class="col-sm-4">
                <select class="mdb-select colorful-select dropdown-primary md-form" id="etapas_ensino" name="etapas_ensino[]" multiple searchable="Search here.." />
                    <option value = <?php echo form_dropdown($etapas_ensino);?></option>
                </select>   
            </div>
        </div>
        
    </div>

</div>

<!-- PANEL GROUP -->