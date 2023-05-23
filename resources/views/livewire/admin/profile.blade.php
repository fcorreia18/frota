
<div class="page-content--bgf7">
    <!-- BREADCRUMB-->
    <section class="au-breadcrumb2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb-content">
                        <div class="au-breadcrumb-left">
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Perfil</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->

    <!-- PERFIL -->
    <section class="perfil">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="col-lg-12 pt-4 pb-4 shadow-sm bg-white">
                        <div class="perfil-content m-auto text-center">
                            <img src="<?= asset("/images/icon/bastonaria.jpeg") ?>" style="" />
                        </div>

                    </div>
                    <div class="mt-3 col-lg-12 bg-white shadow-sm p-3 d-flex flex-row justify-content-between pb-4">
                        <div class="">
                            Minha assinatura
                        </div>
                        <div class="au-form-icon--sm mobile_margin_solicitacao" onclick="document.getElementById('assinatura').click()">

                            <button type="submit" title="solicitar cédula" class="au-btn--submit2 bg-padrao rounded " style="height: 33px;width: 33px;">
                                <i class="zmdi zmdi-plus text-white"></i>
                            </button>

                        </div>

                    </div>
                    <div>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <input type="file" name="assinatura" id="assinatura" class="form-control col-lg-12" onchange="document.getElementById('adicionar_foto').click()" hidden>
                            <button type="submit" id="adicionar_foto"></button>
                        </form>
                        <div class="col-lg-12 bg-white p-3 shadow-sm">
                            <img src="<?= asset("/img/assinatura/bastonaria.png") ?>" style="width: 100%; height: 100px;" alt="">
                        </div>
                    </div>
                </div>

                <!-- PERFIL -->
                <div class="col-lg-9 funcionario">
                    <div class="col-lg-12 p-4 shadow-sm bg-white">
                        <div class="content-form-perfil">
                            <span>Actualizar o meu Perfil</span>
                        </div>
                    </div>
                    <div class="p-4 shadow-sm bg-white mt-3 col-lg-12">
                        <form action="<?= $router->route('admin.editPerfil', ['id' => user()->funcionario()->id]) ?>" method="post" class="form-perfil" enctype="multipart/form-data" id="perfil">
                            <div class="mt-4 mb-4">
                                <span>Dados Biográficos</span>
                                <?= flash() ?>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <input type="text" name="nome" value="<?= user()->funcionario()->nome ?>" class="form-control shadow-sm" placeholder="">
                                    <small>Nome Completo <sup class="text-danger">*</sup></small>
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="file" name="imagem" class="form-control shadow-sm" placeholder="">
                                    <small>Foto de perfil <sup class="text-danger">*</sup></small>
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="text" name="num_bilhete" value="<?= user()->funcionario()->num_bilhete ?>" class="form-control shadow-sm" placeholder="">
                                    <small>Número de BI <sup class="text-danger">*</sup></small>
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="date" name="emissao_bilhete" value="<?= user()->funcionario()->emissao_bilhete ?>" class="form-control shadow-sm" placeholder="">
                                    <small>Data de Emissão do BI <sup class="text-danger">*</sup></small>
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="text" name="endereco" value="<?= user()->funcionario()->endereco ?>" class="form-control shadow-sm" placeholder="">
                                    <small>Endereço <sup class="text-danger">*</sup></small>
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="text" name="telemovel" value="<?= user()->funcionario()->telemovel ?>" class="form-control shadow-sm" placeholder="">
                                    <small>Telefone <sup class="text-danger">*</sup></small>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                            <div class="row">
                                <br>
                            </div>
                            <div class="mt-4 mb-4">
                                <span>Informação do Sistema</span>

                            </div>

                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <input type="email" name="email" value="<?= user()->email ?>" class="form-control shadow-sm" placeholder="">
                                    <small>E-mail <sup class="text-danger">*</sup></small>
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="password" name="password" class="form-control password shadow-sm" placeholder="">
                                    <small>Password <sup class="text-danger">*</sup></small>
                                </div>
                                <div class="form-group col-lg-4">
                                    <input type="password" name="password1" class="form-control password1 shadow-sm" placeholder="">
                                    <small>Confirmar password <sup class="text-danger">*</sup></small>
                                </div>
                            </div>
                            <!-- Input de submeter -->
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="submit" value="Atualizar" class="btn bg-padrao text-white">
                                </div>
                            </div>
                            <!-- Input de submeter -->
                        </form>
                    </div>
                </div>
                <!-- END PERFIL -->
            </div>
        </div>
    </section>

    <!-- END PERFIL -->
</div>
</div>