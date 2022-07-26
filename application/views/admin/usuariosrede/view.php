<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <?php echo $pagetitle; ?>
        <?php echo $breadcrumb; ?>
        <?php $anchor = 'admin/' . $this->router->class; ?>
        <h3 class="box-title" align="center">RIO GRANDE POR ELAS</h3>

    </section>

    <!------------------------------------------------------------------------------->
    <section class="content">
        <div class="row">
            <?php foreach ($usuariorede as $usu) : ?>
                <div class="col-md-12">
                    <!--1-dados do usuario da rede ------------------------------------------>
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Dados do Usuário</h3>
                            &nbsp;&nbsp;
                            <?php $voltar = '<i class="fa fa-times"></i> <span>Voltar</span>';?>
                            <?php if ($usu) { ?>
                                <?php echo anchor('admin/usuariosrede/', "<button class=\"btn btn-primary\"><i class=\"fa fa-reply\"></i> Voltar</button>"); ?>
                            <?php } ?>
                        </div>

                        <div class="box-body">
                            <div class="row">
                                <label class="col-sm-4">Negocio</label>
                                <div class="col-sm-8">
                                    <p> <?= $usu['nomenegocio'] ?> </p>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4">Email</label>
                                <div class="col-sm-8">
                                    <p><?= ($usu['email']); ?>&nbsp;</p>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4">Telefone</label>
                                <div class="col-sm-8">
                                    <p><?= ($usu['celular']); ?>&nbsp;</p>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-4">Data de Nascimento</label>
                                <div class="col-sm-8">
                                    <p><?= ($usu['datanasc']); ?>&nbsp;</p>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-4">Redes Sociais</label>
                                <div class="col-sm-8">
                                    <p><?= ($usu['rede']); ?>&nbsp;</p>
                                </div>
                            </div>

                            
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!---------------------------------------------------------------------------------->
</div>