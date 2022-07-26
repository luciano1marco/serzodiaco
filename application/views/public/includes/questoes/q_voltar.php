<div class="panel panel-primary" id="panel_voltar_primeiro">
    <div class="panel-heading">
        <h3 class="panel-title">
        Quando for possível o retorno aos espaços escolares, quem você acredita que deva voltar primeiro? Em ordem de prioridade, selecione, quem você sugere que retorne primeiro e assim por diante. 
    </div>

    <div class="panel-body">

        <?php if (!empty(form_error('voltar_primeiro'))) : ?>

            <div class="alert alert-danger alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo form_error('voltar_primeiro'); ?>
            </div>

        <?php endif; ?>
       
        <div class="form-group">
        <label class="col-sm-2 control-label" for="escolas">Selecione a ordem</label>
            <div class="col-sm-4">
            <form method="post">
                <div id="selecionados" >
                    <select class="mdb-select colorful-select dropdown-primary md-form" name="voltar" id="selecionaveis">
                      <option value = <?php echo form_dropdown($voltar);?></option>
                    </select>   
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    var todosSelecionados = Array();
    var ordem = 1;
    var esp = " -- ";

    // cuida da seleção dos itens
    $("#selecionaveis").bind("change", function(event) {
        var idSelect = this.value;
        var txtSelect = $("#selecionaveis :selected").text();

        if ((idSelect != 0) && !todosSelecionados.includes(idSelect)) {
            todosSelecionados.push(idSelect);

            var novoInput = document.createElement("input");
            novoInput.id = "input-" + idSelect;
            novoInput.name = "valores[" + (ordem++) + "]";
            novoInput.type = "hidden";
            novoInput.value = idSelect;

            var novoLabel = document.createElement("label");
            novoLabel.id = "label-" + idSelect;
            novoLabel.innerHTML = txtSelect;

            var novoBtExcluir = document.createElement("a");
            novoBtExcluir.id = "a-" + idSelect;
            novoBtExcluir.href = "#";
            novoBtExcluir.innerHTML = "Excluir";
            novoBtExcluir.style = "color: red";
            novoBtExcluir.onclick = function() {
                excluirSelecionado(this);
            };

            var novaLinha = document.createElement("div");
            novaLinha.id =  "div-" + idSelect;
            novaLinha.append(novoInput);
            novaLinha.append(novoLabel);
            novaLinha.append(esp);
            novaLinha.append(novoBtExcluir);

            $("#selecionados").append(novaLinha);

            $("#selecionaveis option[value='" + idSelect + "']").attr("disabled", "disabled");
            $("#selecionaveis").val(0);
        }
    });

    $("#btEnviar").bind("click", function(event) {
        var selecionados = $("input[name^=valores]");
        selecionados = selecionados.toArray();

        if (selecionados.length > 0) {
            var novoIndex = 1;

            selecionados.forEach(function(element) {
                var idAtual = element.id.split("-")[1];
                $('#input-' + idAtual)[0].name = "valores[" + (novoIndex++) + "]";
            });

            console.log($("input[name^=valores]"));
        } else {
            alert("selecione algum item");
            event.preventDefault();
        }
    });

    // funcao para remover itens da lista
    function excluirSelecionado(element) {
        var idExcluir = element.id.split("-")[1];

        var index = todosSelecionados.indexOf(idExcluir);
        if (index >= 0) {
            todosSelecionados.splice(index, 1);

            $("#div-" + idExcluir).remove();
           // conta = conta -1;

            $("#selecionaveis option[value='" + idExcluir + "']").removeAttr("disabled");
        }
    }
</script>
<!-- PANEL GROUP -->