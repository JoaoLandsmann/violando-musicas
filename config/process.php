<?php 

	session_start();									

	include_once("connection.php");					 

	include_once("url.php");						

	$data = $_POST;


	// MODIFICAÇÕES NO BANCO

	if(!empty($data)) {


		// ADICIONAR SOCIO

		if($data["type"] === "create") {

			$name = $data["name"];
			$email = $data["email"];
			$valor = $data["valor"];
			$ocupacao = $data["ocupacao"];

			$query = "INSERT INTO socios (name, email, valor, ocupacao) VALUES (:name, :email, :valor, :ocupacao)";

			$stmt = $conn->prepare($query);

			$stmt->bindParam(":name", $name);
			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":valor", $valor);
			$stmt->bindParam(":ocupacao", $ocupacao);


			try {

				$stmt->execute();
				$_SESSION["msg"] = "Sócio $name adicionado à database, enviamos um email para $email parabenizando sua aquisição";
				

			} catch(PDOException) {


				$error = $e->getMessage();

				echo "Erro: $error";

			}

		
		// DELETAR SÓCIO

		} else if ($data["type"] === "delete") {

			$id = $data["id"];

			$query = "DELETE FROM socios WHERE id = :id";

			$stmt = $conn->prepare($query);

			$stmt->bindParam(":id", $id);


			try {

				$stmt->execute();
				$_SESSION["msg"] = "Sócio Removido com sucesso!";

			} catch(PDOException $e) {


				$error = $e->getMessage();

				echo "Erro: $error";

			}

		}
		
		header("location:" . $BASE_URL . "../socios-admin.php");

	} else {

	$id;																

	if (!empty($_GET)) {	

		$id = $_GET["id"];
	}									

		if (!empty($id)) {										 

			$query = "SELECT * FROM socios WHERE id = :id";	

			$stmt = $conn->prepare($query);

			$stmt->bindParam(":id", $id);							

			$stmt->execute();

			$viola = $stmt->fetch();								

		} else {													

			$socios = [];

			$query = "SELECT * FROM socios";

			$stmt = $conn->prepare($query);

			$stmt->execute();

			$socios = $stmt->fetchAll();

		}

	}

		$conn = null;											

?>