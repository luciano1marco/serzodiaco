<script>
  $(document).ready(function() {
      $('select').selectpicker();
});
</script>

<div class="panel panel-primary" id="panel_escola">
    <div class="panel-heading">
        <h3 class="panel-title">
        Escola(s) onde os(as) estudantes pelos quais você é responsável estudam? 
        </h3>
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('escola'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('escola'); ?> 
            </div>
           
        <?php endif; ?>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="escolas">Selecione a(s) Escola(s)</label>
            <div class="col-sm-4">
                <select class="mdb-select colorful-select dropdown-primary md-form" id="escolas" name="escolas[]" multiple searchable="Search here.." />
                    <option value = <?php echo form_dropdown($escolas);?></option>
                </select>  
                
            </div>
        </div>
       
       

    </div>

</div>

<!-- PANEL GROUP -->