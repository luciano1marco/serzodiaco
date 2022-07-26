<script>
  $(document).ready(function() {
      $('select').selectpicker();
});
</script>

<div class="panel panel-primary" id="panel_aparelhos">
    <div class="panel-heading">
        <h3 class="panel-title">
        A quais aparelhos tecnológicos de comunicação os(as) estudantes têm acesso? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('aparelhos'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('aparelhos'); ?>
            </div>

        <?php endif; ?>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="escolas">Selecione o(s) Aparelho(s)</label>
            <div class="col-sm-4">
                <select class="mdb-select colorful-select dropdown-primary md-form" id="aparelhos" name="aparelhos[]" multiple searchable="Search here.." />
                    <option value = <?php echo form_dropdown($aparelhos);?></option>
                </select>   
            </div>
        </div>
      </div>

</div>

<!-- PANEL GROUP -->