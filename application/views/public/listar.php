<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    #register h2,h6 {
        text-align: center;
        font-size: 30px;
        color: #992691;
    }
</style>

<?php echo $modulo_menu; ?>
<?php echo $modulo_cabecalho; ?>

<?php $anchor = 'public/'.$this->router->class; ?>

<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<h3 align="center">Lista de Todos os Socios do Zodíaco</h3>
							</div>
						</div>
					</div>
					<div class="box-body">
						<table class="table table-striped table-hover datatable">
							<thead>
								<tr>
									<th>Socio</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($socio as $apa) : ?>
									<tr>
										<td><?php echo htmlspecialchars($apa['nome'], ENT_QUOTES, 'UTF-8'); ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php echo $modulo_rodape; ?>

</html>

<style>
    .error{
        color: red;
    }
</style>

<script>
    $(document).ready(function() {

        // Desliga o Validate para poder usar apenas validação SERVER CI
        $("#form-questionario").validate({ ignore: "*" });

        $.validator.setDefaults({     
            // O Select Picker precisa mudar o erro de local         
            errorPlacement: function (error, element) {     
                if (element.hasClass('especial')) {
                    error.insertAfter('.especial_erro');  
                }
                else if(element.hasClass('qtdpresencial')) {
                    error.insertAfter('.qtdpresencial_erro');         
                } else {
                    error.insertAfter(element);
                }          
            }
        });

        $("#form-questionario").validate({   
            errorClass: "error",
            validClass: "success",         
            rules: {
                logradouro: {
                    required: true,
                },
                email: {
                    required: true,
                } ,
                nome: {
                    required: true,
                } ,
                datanasc: {
                    required: true,
                } ,
                nomeusuario: {
                    required: true,
                } ,
                password: {
                    required: true,
                } ,
                cpf: {
                    required: true,
                } ,
                celular: {
                    required: true,
                } ,
            
            },
            messages: {
                email: 'O campo E-mail é obrigatório.',
                nome: 'O campo Nome Completo é obrigatório.',
                datanasc: 'O campo Data de Nascimento é obrigatório.',
                nomeusuario: 'O campo Nome de Usuário é obrigatório.',
                senha: 'O campo Senha é obrigatório.',
                logradouro: 'O campo Logradouro é obrigatório.',
                cpf: 'O campo CPF é obrigatório.',
                celular: 'O campo CPF é obrigatório.',
                
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
        
        $("#form-questionario").submit(function(){
            if($("#form-questionario").valid()){   
                return true;
            }
        });
    });
</script>