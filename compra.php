<?php

    include_once("templates1/header.php");
        
?>

            <section class="buying-section section-padding">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-10 mx-auto">
                            <form class="custom-form buying-form mb-5 mb-lg-0" action="<?= $BASE_URL ?>config/process_subscribe.php" method="POST">


                                <?php if (isset($printMsg) && $printMsg != ''): ?>

                                    <p id="msg"><?= $printMsg ?> </p>

                                <?php endif; ?>


                                <h2 class="text-center mb-4">Estamos quase lá!</h2>

                                <input type="hidden" name="type" value="create">

                                <div class="buying-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Nome completo" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Endereço de email" required>
                                        </div>
                                    </div>

                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefone" required>

                                    <h6>Escolha o seu plano</h6>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-check form-control">
                                                <input class="form-check-input" type="radio" name="plano" id="plano" value="Plano vitalício" checked>
                                                <label class="form-check-label" for="plano">
                                                    Plano vitalício (R$899)
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-check form-check-radio form-control">
                                                <input class="form-check-input" type="radio" name="plano" id="plano" value="Plano mensal">
                                                <label class="form-check-label" for="plano">
                                                    Plano mensal (R$119)
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="number" name="num" id="num" class="form-control" placeholder="Número de planos" required maxlength="9" min="1">

                                    <textarea name="descricao" rows="3" class="form-control" id="descricao" placeholder="Nos conte um pouco sobre você (opcional)" value="descricao"></textarea>

                                    <div class="col-lg-6 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control" value="comprar">Comprar pacote(s)</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>


<?php

    include_once("templates1/footer.php");
        
?>