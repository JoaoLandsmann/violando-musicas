<?php 
									
	include_once("connection2.php");				
	include_once("url.php");						

	$data = $_POST;



	if(!empty($data)) {



		if($data["type"] === "create") {

			$name = $data["name"];
			$email = $data["email"];
			$phone = $data["phone"];
			$plano = $data["plano"];
			$num = $data["num"];
			$descricao = $data["descricao"];

			$query = "INSERT INTO inscrever (name, email, phone, plano, num, descricao) VALUES (:name, :email, :phone, :plano, :num, :descricao)";

			$stmt = $conn->prepare($query);

			$stmt->bindParam(":name", $name);
			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":phone", $phone);
			$stmt->bindParam(":plano", $plano);
			$stmt->bindParam(":num", $num);
			$stmt->bindParam(":descricao", $descricao);


			try {

				$stmt->execute();
				$_SESSION["msg"] = "$name, agradeçemos sua compra! Um recibo foi enviado para o email $email, juntamente com a chave de acesso ao curso.";


			} catch(PDOException) {


				$error = $e->getMessage();

				echo "Erro: $error";

			}
			
		}

		header("location:" . $BASE_URL . "../compra-finalizada.php");
		

		} else {

		$id;															

		if (!empty($_GET)) {	

			$id = $_GET["id"];
		}									


		if (!empty($id)) {											 
			
			$query = "SELECT * FROM inscrever WHERE id = :id";		

			$stmt = $conn->prepare($query);

			$stmt->bindParam(":id", $id);							

			$stmt->execute();

			$inscreve = $stmt->fetch();								 
			
		} else {												


			$inscrever = [];

			$query = "SELECT * FROM inscrever";

			$stmt = $conn->prepare($query);

			$stmt->execute();

			$inscrever = $stmt->fetchAll();

		}

	}


		$conn = null;										

?>