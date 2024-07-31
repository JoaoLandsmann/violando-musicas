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
                                
                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

                <?php else: ?>

                    <p id="empty-list-text">Não temos sócios ativos no momento :( </p>

                <?php endif; ?>
                
            </form>

            </div>

        </div>

    </div>

</section>

<?php 
    include_once('templates1/footer.php');
?>