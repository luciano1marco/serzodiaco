$(document).ready(function() {

    //Seta lingua do Moment JS
    moment.locale('pt-br');

    if ($('.select2').length > 0) {
        $('.select2').select2({
            theme: 'flat'
        });
    }

    if ($('.select2_multiple').length > 0) {
        $('.select2_multiple').select2({
            minimumResultsForSearch: 20,
            theme: 'flat' //Classic Default
        });
    }

    if ($('.datetimepicker').length > 0) {
        $('.datetimepicker').datetimepicker({
            //format: 'LT'
            format: 'HH:mm'
        });

        $('.datetimepicker').mask('00:00');
    }
    //--não remover
    $("input[name='tempresencial']").on('ifChecked ifToggled', function(event) {
        var val = $(this).val();

        if (val == 1) {
            $("#panelgrp_qtdpresencial").show();
        } else {
            $("#panelgrp_qtdpresencial").hide();
        }
    });
    //--não remover
    if ($("input[name='tempresencial']").is(':checked')) {
        var selectedOption = $("input:radio[name=tempresencial]:checked").val()

        if (selectedOption == 1) {
            $("#panelgrp_qtdpresencial").show();
            $("#panel_qtdpresencial").show();
        } else {
            $("#panelgrp_qtdpresencial").hide();
            $("#panel_qtdpresencial").hide();
        }
    }
});
//---panel-group para campo forma de atuação
$("input[name='formaatuacao']").on('ifChecked ifToggled', function(event) {
    var val = $(this).val();

    if (val == 9) {
        $("#panelgrp_outraforma").show();
    } else {
        $("#panelgrp_outraforma").hide();
    }
});
//---panel-group para campo atividade
$("input[name='atividade']").on('ifChecked ifToggled', function(event) {
    var val = $(this).val();

    if (val == 12) {
        $("#panelgrp_outraatividade").show();
    } else {
        $("#panelgrp_outraatividade").hide();
    }
});
//---panel-group para campo porte
$("input[name='porte']").on('ifChecked ifToggled', function(event) {
    var val = $(this).val();

    if (val == 7) {
        $("#panelgrp_outroporte").show();
    } else {
        $("#panelgrp_outroporte").hide();
    }
});
//---panel-group para campo ramo
$("input[name='ramo']").on('ifChecked ifToggled', function(event) {
    var val = $(this).val();

    if (val == 5) {
        $("#panelgrp_outroramo").show();
    } else {
        $("#panelgrp_outroramo").hide();
    }
});
//---panel-group para campo rede
$("input[name='rede']").on('ifChecked ifToggled', function(event) {
    var val = $(this).val();

    if (val == 1) {
        $("#panelgrp_outrarede").show();
    } else {
        $("#panelgrp_outrarede").hide();
    }
});
//---panel-group para campo termo
$("input[name='termo']").on('ifChecked ifToggled', function(event) {
    var val = $(this).val();

    if (val == 1) {
        $("#panelgrp_termo1").show();
    } else {
        $("#panelgrp_termo1").hide();
    }
});

//--mascara do campo celular
$("#celular").keypress(function() {
    $(this).mask('(00) 0000-0000');
});

//--mascara do campo cep
$("#cep").keypress(function() {
    $(this).mask('00-000-000');
});

//--mascara do campo cpf
$("#cpf").keypress(function() {
    $(this).mask('000.000.000-00');
});

//--mascara do campo cnpj
$("#cnpj").keypress(function() {
    $(this).mask('00.000.000/0000-00');
});