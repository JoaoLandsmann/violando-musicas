<?php 
    include_once('templates1/header2.php');
?>

<section class="buying-section section-padding">

    <div class="section-overlay"></div>

    <div class="container">
        
        <div class="row">

            <div>

                <form id="create-form" class="custom-form buying-form mb-5 mb-lg-0" action="<?= $BASE_URL ?>config/process.php" method="POST">

                <?php if (isset($printMsg) && $printMsg != ''): ?>

                    <p id="msg"><?= $printMsg ?> </p>

                <?php endif; ?>

                <h1 id="main-title">Sócios Ativos</h1>

                <?php if(count($socios) > 0): ?>

                <table class="table" id="socio-table">
                    
                    <thead>
                        
                        <tr class="table-line">
                            
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Ocupação</th>
                            <th scope="col"></th>

                        </tr>

                    </thead>

                    <tbody>
                        
                        <?php foreach ($socios as $viola): ?>

                            <tr class="table-line">
                                
                                <td scope="row"><?= $viola["name"] ?> </td>
                                <td scope="row"><?= $viola["email"] ?> </td>
                                <td scope="row"><?= $viola["valor"] ?> </td>
                                <td scope="row"><?= $viola["ocupacao"] ?> </td>
                                
                                
                                <td class="actions">
                                    <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                        <input type="hidden" name="type" value="delete">
                                        <input type="hidden" name="id" value="<?= $viola["id"] ?>">
                                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                                    </form>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

                <?php else: ?>

                    <p id="empty-list-text">Não temos sócios ativos no momento :( </p>

                <?php endif; ?>

                <a href="<?= $BASE_URL ?>create.php" class="a-add-socio"><div class="botao-add-socio">Adicionar Sócio</div></a>
                
            </form>

            </div>

        </div>

    </div>

</section>


<?php 
    include_once('templates1/footer.php');
?>