<?php

if (count($_POST)) {
    echo "<pre>";
    var_dump($_POST);
    die;
}

?>
<div class="panel panel-primary" id="panel_voltar_primeiro">
    <div class="panel-heading">
        <h3 class="panel-title">
        Quando for possível o retorno aos espaço escolar, quem você acredita que deva voltar primeiro?  </h3>
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

    <body>
        <select id="selecionaveis">
            <option value="0">Selecionar...</option>
            <option value="1">Dez</option>
            <option value="2">Vinte</option>
            <option value="3">Trinta</option>
            <option value="4">Quarenta</option>
            <option value="5">Cinquenta</option>
            <option value="6">Sessenta</option>
            <option value="70">Setenta</option>
            <option value="80">Oitenta</option>
            <option value="90">Noventa</option>
        </select>

        <form method="post">
            <div id="selecionados">
                
            </div>
           <input id="btEnviar" type="submit" value="Enviar" /> 
        </form>
    </body>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        var todosSelecionados = Array();
        var ordem = 1;

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
                novoBtExcluir.onclick = function() { excluirSelecionado(this); };

                var novaLinha = document.createElement("div");
                novaLinha.id = "div-" + idSelect;

                novaLinha.append(novoInput);
                novaLinha.append(novoLabel);
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

                $("#selecionaveis option[value='" + idExcluir + "']").removeAttr("disabled");
            }
        }
    </script>
</html>