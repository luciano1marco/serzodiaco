$(document).ready(function () {

    function relqdq() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelqdq',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var dt = new Array();
                var cor = [];
                var id = [];

                for (var i in data) {
                    //console.log(data);
                    dt.push(data[i].dt);
                    cor.push(data[i].cor);
                    id.push(data[i].id);
               
                }
                
                var chartdata = {
                    labels: dt,
                    datasets: [
                        {
                            label: ['Quantidade'],
                            backgroundColor: getColors(12),
                            //backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data:  id 
                        }
                    ]
                };

                var cty = $("#relqdqbar");

                var barGraph = new Chart(cty, {
                    type: 'bar',
                    data: chartdata,
                    options: {
                        legend: { display: false },
                        title: {
                            display: true,
                            text: 'Quantidade de Questionários por Data'
                        }
                    }
                });

            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    function relqtotal() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelqtotal',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var total = new Array();
                var cor = [];
                
                for (var i in data) {
                    //console.log(data);
                    total.push(data[i].total);
                    cor.push(data[i].cor);
                  
                }
                
                var chartdata = {
                    labels: total,
                    datasets: [
                        {
                            label: total,
                            backgroundColor: getColors(12),
                            //backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data:  total 
                        }
                    ]
                };

                var cty = $("#relqtotalbar");

                var barGraph = new Chart(cty, {
                    type: 'bar',
                    data: chartdata,
                    options: {
                        legend: { display: false },
                        title: {
                            display: true,
                            text: 'Quantidade Total de Questionários '
                        }
                    }
                });

            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    function relrisco() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelrisco',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var qtd = new Array();
                var total = new Array();
                var cor = [];


                for (var i in data) {
                    //console.log(data);
                    qtd.push(data[i].qtd);
                    total.push(data[i].total);
                    cor.push(data[i].cor);

                }

                por = [qtd * 100 / total];
                por = parseFloat(por).toFixed(2);//fixar casa decimal em 2
               
                qtd = [qtd, total];

                var chartdata1 = {
                    labels: ['Grupo de Risco - (' + por + '%)' , 'Total - ('+ total + ')'],
                    datasets: [
                        {
                            label: 'Quantidade Grupo de Risco',
                            backgroundColor: getColors(12),
                            // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: qtd
                        }
                    ]
                }

                    ;

                var cty = $("#relriscopie");
               
                var pieChart = new Chart(cty, {
                    type: 'pie',
                    data: chartdata1,
                    options: {
                        legend: { display: true , position: 'left', align: 'start'},
                        title: {
                            display: true,
                            text: 'Quantidade Fazem parte do Grupo de Risco '
                        }
                    }
                });

            },
            error: function (data) {
                console.log(data);
            }
        });
    }
     
    function relestudante() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelestudante',
            method: "GET",
            success: function (data) {
                //console.log(qespecial,qestudantes);
                var qespecial = new Array();
                var cor = [];
                var qestudantes = new Array();
                //var dois = [];

                for (var i in data) {
                    //console.log(data);
                    qespecial.push(data[i].qespecial);
                    cor.push(data[i].cor);
                    qestudantes.push(data[i].qestudantes);
                    //dois.push(data[i].dois);
               
                }
                console.log(qespecial,qestudantes);
               
                
                var chartdata = {
                    labels: qestudantes,
                    datasets: [
                        {
                            label: qestudantes,
                            backgroundColor: getColors(12),
                            //backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: qestudantes
                        }
                    ]
                };

                var cty = $("#relestudantepie");

                var barGraph = new Chart(cty, {
                    type: 'bar',
                    data: chartdata,
                    options: {
                        legend: { display: false },
                        title: {
                            display: true,
                            text: 'Quantidade Total de Estudantes '
                        }
                    }
                });

            },
            error: function (data) {
                console.log(data);
            }
        });
    }


    function relespecial() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelespecial',
            method: "GET",
            success: function (data) {
                //console.log(qespecial,qestudantes);
                var qespecial = new Array();
                var cor = [];
                var qestudantes = new Array();
                //var dois = [];

                for (var i in data) {
                    //console.log(data);
                    qespecial.push(data[i].qespecial);
                    cor.push(data[i].cor);
                    qestudantes.push(data[i].qestudantes);
                    //dois.push(data[i].dois);
               
                }
                console.log(qespecial,qestudantes);
               
                
                var chartdata = {
                    labels: qespecial,
                    datasets: [
                        {
                            label: qespecial,
                            backgroundColor: getColors(12),
                            //backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: qespecial
                        }
                    ]
                };

                var cty = $("#relespecialpie");

                var barGraph = new Chart(cty, {
                    type: 'bar',
                    data: chartdata,
                    options: {
                        legend: { display: false },
                        title: {
                            display: true,
                            text: 'Quantidade de Estudantes da Educação Especial'
                        }
                    }
                });

            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    function relretorno() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelretorno',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var ordem = new Array();
                var cor = [];
                var descricao = [];

                for (var i in data) {
                    //console.log(data);
                    ordem.push(data[i].ordem);
                    cor.push(data[i].cor);
                    descricao.push(data[i].descricao);

                }

                
                var chartdata = {
                    labels: descricao,
                    datasets: [
                        {
                            label: descricao ,
                            backgroundColor: getColors(12),
                            // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: ordem
                        }
                    ]
                }
                ;

                var ctx = $("#relretornobar");
               
                var barGraph = new Chart(ctx, {
                    type: 'pie',
                    data: chartdata,
                    options: {
                        legend: { display: true, position: 'left', align: 'start' },
                        title: {
                            display: true,
                            text: 'Mais Votadas a Retornar em 1º'
                        }
                    }
                });
                
               
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
   
    function relretorno2() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelretorno2',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var ordem = new Array();
                var cor = [];
                var descricao = [];

                for (var i in data) {
                    //console.log(data);
                    ordem.push(data[i].ordem);
                    cor.push(data[i].cor);
                    descricao.push(data[i].descricao);

                }

                
                var chartdata = {
                    labels: descricao,
                    datasets: [
                        {
                            label: descricao ,
                            backgroundColor: getColors(12),
                            // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: ordem
                        }
                    ]
                }
                ;

                var ctx = $("#relretornobar2");
               
                var barGraph = new Chart(ctx, {
                    type: 'pie',
                    data: chartdata,
                    options: {
                        legend: { display: true, position: 'left', align: 'start' },
                        title: {
                            display: true,
                            text: 'Mais Votadas a Retornar em 2º'
                        }
                    }
                });
                
               
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    function relretorno3() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelretorno3',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var ordem = new Array();
                var cor = [];
                var descricao = [];

                for (var i in data) {
                    //console.log(data);
                    ordem.push(data[i].ordem);
                    cor.push(data[i].cor);
                    descricao.push(data[i].descricao);

                }

                
                var chartdata = {
                    labels: descricao,
                    datasets: [
                        {
                            label: descricao ,
                            backgroundColor: getColors(12),
                            // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: ordem
                        }
                    ]
                }
                ;

                var ctx = $("#relretornobar3");
               
                var barGraph = new Chart(ctx, {
                    type: 'pie',
                    data: chartdata,
                    options: {
                        legend: { display: true, position: 'left', align: 'start' },
                        title: {
                            display: true,
                            text: 'Mais Votadas a Retornar em 3º'
                        }
                    }
                });
                
               
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    function relpresencial() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelpresencial',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var presencial = new Array();
                var cor = [];
                var descricao = [];

                for (var i in data) {
                    //console.log(data);
                    presencial.push(data[i].presencial);
                    cor.push(data[i].cor);
                    descricao.push(data[i].descricao);

                }

                
                var chartdata = {
                    labels: descricao,
                    datasets: [
                        {
                            label: descricao ,
                            backgroundColor: getColors(12),
                            // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: presencial
                        }
                    ]
                }
                ;

                var ctx = $("#relpresencialbar2");
               
                var barGraph = new Chart(ctx, {
                    type: 'pie',
                    data: chartdata,
                    options: {
                        legend: { display: true, position: 'left', align: 'start' },
                        title: {
                            display: true,
                            text: 'Melhor forma dos Estudantes acessarem atividades escolares'
                        }
                    }
                });
                
               
            },
            error: function (data) {
                console.log(data);
            }
        });
    }
    
    function reltrabalho() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getreltrabalho',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var qtd = new Array();
                var cor = [];
                var descricao = [];

                for (var i in data) {
                    //console.log(data);
                    qtd.push(data[i].qtd);
                    cor.push(data[i].cor);
                    descricao.push(data[i].descricao);

                }

                
                var chartdata = {
                    labels: descricao,
                    datasets: [
                        {
                            label: descricao ,
                            backgroundColor: getColors(12),
                            // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: qtd
                        }
                    ]
                }
                ;

                var ctx = $("#reltrabalhobar");
               
                var barGraph = new Chart(ctx, {
                    type: 'pie',
                    data: chartdata,
                    options: {
                        legend: { display: true, position: 'left', align: 'start' },
                        title: {
                            display: true,
                            text: 'Com quem os Estudantes ficam'
                        }
                    }
                });
                
               
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    function reltrabalho1() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getreltrabalho1',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var qtd = new Array();
                var cor = [];
                var ntem = [];
                var tem = new Array();

                for (var i in data) {
                    //console.log(data);
                    qtd.push(data[i].qtd);
                    cor.push(data[i].cor);
                    tem.push(data[i].tem);
                    ntem.push(data[i].ntem);
                }

                ntem = [qtd - tem];
                tem = [tem , ntem, qtd];

                var chartdata = {
                    labels: ['Trabalham Presencial', 'Não Presencial', 'Total'],
                    datasets: [
                        {
                            label: tem ,
                            backgroundColor: getColors(12),
                            // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: tem
                        }
                    ]
                }
                ;

                var ctx = $("#reltrabalho1bar");
               
                var barGraph = new Chart(ctx, {
                    type: 'pie',
                    data: chartdata,
                    options: {
                        legend: { display: true, position: 'left', align: 'start' },
                        title: {
                            display: true,
                            text: 'Quantidade que Trabalham Presencial'
                        }
                    }
                });
                
               
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    function relacesso() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelacesso',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var qtd = new Array();
                var cor = [];
                var descricao = [];
                
                for (var i in data) {
                    //console.log(data);
                    qtd.push(data[i].qtd);
                    cor.push(data[i].cor);
                    descricao.push(data[i].descricao);
               
                }

                var chartdata = {
                    labels: descricao,
                    datasets: [
                        {
                            label: qtd ,
                            backgroundColor: getColors(12),
                            // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: qtd
                        }
                    ]
                }
                ;

                var ctx = $("#relacessobar");
               
                var barGraph = new Chart(ctx, {
                    type: 'pie',
                    data: chartdata,
                    options: {
                        legend: { display: true, position: 'left', align: 'start' },
                        title: {
                            display: true,
                            text: 'De qual local a familia acessa a internet'
                        }
                    }
                });
                
               
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    function relacesso1() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelacesso1',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var qtd = new Array();
                var cor = [];
                var descricao = [];
                
                for (var i in data) {
                    //console.log(data);
                    qtd.push(data[i].qtd);
                    cor.push(data[i].cor);
                    descricao.push(data[i].descricao);
               
                }

                var chartdata = {
                    labels: descricao,
                    datasets: [
                        {
                            label: qtd ,
                            backgroundColor: getColors(12),
                            // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: qtd
                        }
                    ]
                }
                ;

                var ctx = $("#relacesso1bar");
               
                var barGraph = new Chart(ctx, {
                    type: 'pie',
                    data: chartdata,
                    options: {
                        legend: { display: true, position: 'left', align: 'start' },
                        title: {
                            display: true,
                            text: 'Qual tipo de Internet a familia acessa'
                        }
                    }
                });
                
               
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    function relaparelho() {
        $.ajax({
            url: 'http://' + window.location.host + '/questionario-educacao/admin/relatorios/getrelaparelho',
            method: "GET",
            success: function (data) {
                //console.log(data);
                var ordem = new Array();
                var cor = [];
                var descricao = [];

                for (var i in data) {
                    //console.log(data);
                    ordem.push(data[i].ordem);
                    cor.push(data[i].cor);
                    descricao.push(data[i].descricao);

                }

                
                var chartdata = {
                    labels: descricao,
                    datasets: [
                        {
                            label: descricao ,
                            backgroundColor: getColors(12),
                            // backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                            borderColor: 'rgba(200, 200, 200, 0.75)',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: ordem
                        }
                    ]
                }
                ;

                var ctx = $("#relaparelhobar");
               
                var barGraph = new Chart(ctx, {
                    type: 'pie',
                    data: chartdata,
                    options: {
                        legend: { display: true, position: 'left', align: 'start' },
                        title: {
                            display: true,
                            text: 'Aparelhos tecnológicos que os estudantes tem acesso'
                        }
                    }
                });
                
               
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    //----fim ----------
  

    function barchart() {
        var ctx = $('#barChart').get(0).getContext('2d');

        var data = {
            labels: ["Chocolate", "Vanilla", "Strawberry"],
            datasets: [
                {
                    label: "Blue",
                    backgroundColor: "blue",
                    data: [3, 7, 4]
                },
                {
                    label: "Red",
                    backgroundColor: "red",
                    data: [4, 3, 5]
                },
                {
                    label: "Green",
                    backgroundColor: "green",
                    data: [7, 2, 6]
                }
            ]
        };

        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                barValueSpacing: 20,
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                        }
                    }]
                }
            }
        });

    }

    function initGraph() {
        relqdq();
        relqtotal();
        relespecial();
        relestudante();
        relrisco();
        relretorno();
        relretorno2();
        relretorno3();
        relpresencial();
        reltrabalho();
        reltrabalho1();
        relacesso();
        relacesso1();
        relaparelho();

        //fim-----
       
        //barchart();
    }

    //Metodo prático de validar vazios em JS
    function testa_empty(val) {
        if (val === undefined)
            return true;
        if (typeof (val) == 'function' || typeof (val) == 'number' || typeof (val) == 'boolean' || Object.prototype.toString.call(val) === '[object Date]')
            return false;
        if (val == null || val.length === 0) // null or 0 length array
            return true;
        if (typeof (val) == "object") {
            // empty object

            var r = true;

            for (var f in val) {
                r = false;
            }
            return r;
        }
        return false;
    }

    function getSafe(fn, defaultVal) {
        try {
            return fn();
        } catch (e) {
            return defaultVal;
        }
    }

    function getColors(c = 1) {
        var cor = new Array();

        for (var i = 0; i < c; i++) {
            cor.push(getRandomColor());
        }

        return cor;
    }

    function getRandomColor() {
        var letters = '0123456789ABCDEF'.split('');
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    initGraph();

});

