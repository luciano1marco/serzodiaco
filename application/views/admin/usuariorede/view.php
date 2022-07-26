<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <?php echo $pagetitle; ?>
        <?php echo $breadcrumb; ?>
        <?php $anchor = 'admin/' . $this->router->class; ?>
        <h3 class="box-title" align="center">REDE DE POLÍTICAS PÚBLICAS DO MUNICÍPIO DO RIO GRANDE</h3>

    </section>

    <!------------------------------------------------------------------------------->
    <section class="content">
        <div class="row">
            <?php foreach ($usuario as $usu) : ?>
                <div class="col-md-6">
                    <!--1-dados do usuario da rede ------------------------------------------>
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Dados do Plano de Cuidado</h3>
                            &nbsp;&nbsp;
                            <?php $voltar = '<i class="fa fa-times"></i> <span>Voltar</span>';?>
                            <?php if ($usu) { ?>
                                <?php echo anchor('admin/usuariorede/edit/'.$usu['ids'], "<button class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i> Editar</button>"); ?>&nbsp;&nbsp;
                                <?php echo anchor('admin/usuariorede/', "<button class=\"btn btn-primary\"><i class=\"fa fa-reply\"></i> Voltar</button>"); ?>
                            <?php } ?>
                        </div>

                        <div class="box-body">
                            <div class="row">
                                <label class="col-sm-4">Nome</label>
                                <div class="col-sm-8">
                                    <p> <?= $usu['nome'] ?> </p>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4">Endereço</label>
                                <div class="col-sm-8">
                                    <p><?= ($usu['endereco']); ?>&nbsp;</p>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4">Telefone</label>
                                <div class="col-sm-8">
                                    <p><?= ($usu['telefone']); ?>&nbsp;</p>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4">Data de Nascimento</label>
                                <div class="col-sm-8">
                                    <p><?= ($usu['datanasc']); ?>&nbsp;</p>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4">Responsavel</label>
                                <div class="col-sm-8">
                                    <p><?= ($usu['responsavel']); ?>&nbsp;</p>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4">Parentesco </label>
                                <div class="col-sm-8">
                                    <p><?= ($usu['descricao']); ?>&nbsp;</p>
                                </div>
                            </div>


                            <div class="row">
                                <label class="col-sm-4">Serviço de Origem</label>
                                <div class="col-sm-8">
                                    <p><?php echo $usu['ds']; ?>&nbsp;</p>

                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4">Unidade</label>
                                <div class="col-sm-8">
                                    <p><?= ($usu['dun']); ?>&nbsp;</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!--3-Area do Foco------------------------------------------------------->
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Foco Principal</h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <p><?= ($usu['foco']); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Justificativa</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">

                                <div class="col-sm-12">
                                    <p><?= ($usu['justificativa']); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2-Rede de Referencia do usuario-------------------------------------->

                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Rede de Referencia do usuario</h3>
                            &nbsp;&nbsp;
                            <?php if ($usu) { ?>
                                <?php echo anchor('admin/usuariorede/createrefer/'.$usu['ids'], "<button class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i> Criar</button>"); ?>&nbsp;&nbsp;
                                <?php echo anchor('admin/usuariorede/', "<button class=\"btn btn-primary\"><i class=\"fa fa-reply\"></i> Voltar</button>"); ?>
                            <?php } ?>
                        </div>
                        <div class="box-body">
                            <table class="table table-striped table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>Serviços de Referencia</th>
                                        <th>Técnico da Rede</th>
                                        <th>Período</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ref as $re) : ?>
                                        <tr>
                                            <td><?php echo $re['descricao']; ?></td>
                                            <td><?php echo $re['nome']; ?></td>
                                            <td><?php echo $re['periodo']; ?></td>

                                           <!-- Opções -->
									<td>
                                    	<?php echo anchor($anchor.'/editrefer/'.$re['ids'], "<button class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i> Editar</button>"); ?>&nbsp;&nbsp;
                                       
                                    </td>  </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <!--5-Estratégias de Cuidados ------------------------------------------->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Estratégias de Cuidados</h3>
                            &nbsp;&nbsp;
                            <?php if ($usu) { ?>
                                <?php echo anchor('admin/usuariorede/createestrategia/'.$usu['ids'], "<button class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i> Criar</button>"); ?>&nbsp;&nbsp;
                                <?php echo anchor('admin/usuariorede/', "<button class=\"btn btn-primary\"><i class=\"fa fa-reply\"></i> Voltar</button>"); ?>
                           
                            <?php } ?>

                        </div>
                        <div class="box-body">
                            <?php foreach ($est as $e) : ?>
                                <div class="panel panel-info">

                                    <div class="panel-body">

                                        <label class="col-sm-4">Unidade</label>
                                        <div class="col-sm-8">
                                            <p><?= ($e['du']); ?> </p>
                                        </div>

                                        <label class="col-sm-4">Descrição</label>
                                        <div class="col-sm-8">
                                            <p><?= ($e['de']); ?>&nbsp;</p>
                                        </div>

                                        <label class="col-sm-4">Apoiador</label>
                                        <div class="col-sm-8">
                                            <p><?= ($e['nome']); ?>&nbsp;</p>
                                        </div>

                                        <label class="col-sm-4">Data de Registro</label>
                                        <div class="col-sm-8">
                                            <p><?= ($e['dataregistro']); ?>&nbsp;</p>
                                        </div>

                                    </div>
                                    &nbsp;
                                    <!--<a href="<?= base_url('admin/usuariorede/arquivosetapa/' . $e['ids']) ?>"><span class="label label-info">+ Arquivos</span></a>
                                --><!-- Opções -->
									<td>
                                    	<?php echo anchor($anchor.'/editestrategia/'.$e['ids'], "<button class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i> Editar</button>"); ?>&nbsp;&nbsp;
                                       
                                    </td>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <!--6-dados do Diagnostico-------------- ---------------------------------------->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Diagnosticos</h3>
                            &nbsp;&nbsp;
                            <?php if ($usu) { ?>
                                <?php echo anchor('admin/usuariorede/creatediagnostico/'.$usu['ids'], "<button class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i> Criar</button>"); ?>&nbsp;&nbsp;
                                <?php echo anchor('admin/usuariorede/', "<button class=\"btn btn-primary\"><i class=\"fa fa-reply\"></i> Voltar</button>"); ?>
                           
                            <?php } ?>
                        </div>

                        <div class="box-body">
                            <?php foreach ($diagno as $d) : ?>
                                <div class="panel panel-info">
                                    <div class="row">
                                        <label class="col-sm-3">Diagnostico</label>
                                        <div class="col-sm-9">
                                            <p> <?= ($d['nome']); ?> </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3">Alta</label>
                                        <div class="col-sm-9">
                                            <p><?= ($d['alta']); ?>&nbsp;</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-3">Possibilidade de Reintegração</label>
                                        <div class="col-sm-9">
                                            <p><?= ($d['reintegracao']); ?>&nbsp;</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-3">Estrategia</label>
                                        <div class="col-sm-9">
                                            <p><?= ($d['estrategia']); ?>&nbsp;</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-3">Atualização</label>
                                        <div class="col-sm-9">
                                            <p><?= ($d['atualizacao']); ?>&nbsp;</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-3">Reunião</label>
                                        <div class="col-sm-9">
                                            <p><?= ($d['reuniao']); ?>&nbsp;</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-3">Data de Registro</label>
                                        <div class="col-sm-9">
                                            <p><?= ($d['dataregistro']); ?>&nbsp;</p>
                                        </div>
                                    </div>
                                    &nbsp;
                                   <!-- Opções -->
									<td>
                                    	<?php echo anchor($anchor.'/editdiagnostico/'.$d['id'], "<button class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i> Editar</button>"); ?>&nbsp;&nbsp;
                                       
                                    </td>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!---------------------------------------------------------------------------------->
</div>

<!----Modal para deletar usuariorede----------------------------------------------------->
<div id="modal_delete" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atenção!</h4>
            </div>
            <div class="modal-body">
                <p>Deseja realmente excluir esse registro?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="btExcluirConfirmar">Excluir</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->