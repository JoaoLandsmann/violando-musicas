<?php 
	include_once('templates1/header2.php');
?>

		<section class="buying-section section-padding">
            <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-10 mx-auto wrap-socio">
							
							<form id="create-form" class="custom-form buying-form mb-5 mb-lg-0" action="<?= $BASE_URL ?>config/process.php" method="POST">
							
								<h1 id="main-title">Seja Sócio</h1>

								<input type="hidden" name="type" value="create">

								<div class="form-group">
									
									<label for="name">Nome do Sócio:</label>

									<input type="text" tabindex="1" class="form-control" id="name" name="name" placeholder="Digite o nome do sócio..." required>

								</div>

								<div class="form-group">
									
									<label for="email">E-mail do sócio:</label>

									<input type="email" tabindex="2" class="form-control" id="email" name="email" placeholder="bob@gmail.com" required>

								</div>

								<div class="form-group">
									
									<label for="valor">Valor a ser investido:</label>

									<input type="text" tabindex="3" class="form-control" id="valor" name="valor" placeholder="R$100,00" required>

								</div>

								<div class="form-group">
									
									<label for="ocupacao">Ocupação:</label>

									<input type="text" tabindex="4" class="form-control" id="ocupacao" name="ocupacao" placeholder="Digite a ocupação do sócio..." required></input>

								</div>

								<button type="submit" tabindex="5" class="btn btn-primary form-control">Adicionar</button>

								<div class="wrap-btn">
									<?php include_once("templates1/backbtn.html") ?>
								</div>
							</form>

						</div>

					 </div>

				</div>

             </div>

    </section>

<?php 
	include_once('templates1/footer.php');
?>