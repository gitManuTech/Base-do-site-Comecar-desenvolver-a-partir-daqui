<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Handyman - Problem Found</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="">
		<meta name="description" content="Página para relatar problemas">
		<link rel="stylesheet" type="text/css" href="../css/general.css">
		<link rel="stylesheet" type="text/css" href="../css/header.css">
		<link rel="stylesheet" type="text/css" href="../css/form-problem.css">

	</head>

	<body>

		<header class="header">

			<div class="header-title">

				<h2>Faça a sua reclamação</h2>

			</div>

			<nav>

				<ol class="navbar">

					<li><a href="./profile.php"><?php echo $_SESSION["sname"]; ?></a></li>
					<li><a href="../html/">Home</a></li>

				</ol>

			</nav>

		</header>

		<main>

			<form id="form-problem-found" method="POST" action="problem-found-server.php" autocomplete="off">

				<div class="form-aggregate ">

					<div class="form-part problem-title">

						<!-- TODO: Make the input better: filter stuff on JS... -->
						<label for="problem-title">Resumo do problema</label>
						<input type="text" id="problem-title"  class="complain-title" name="problem-title" placeholder="Titulo do problema" maxlength="32" autofocus required>

					</div>


					<div class="form-part problem-block">

						<label for="problem-block">Identifique o bloco</label>
						<input type="text" id="problem-block" class="complain-location" name="problem-block" placeholder="B1" maxlength="2" pattern="[A-Z]{1,1}\d{1,1}" required>

					</div>

				</div>

				<div class="form-aggregate">

					<div class="form-part">

						<!-- TODO: Verify <textarea>'s length on Javascript, later down the line  -->
						<!-- TODO: We'll might need to resize later down the problem size -->
						<label for="problem-description">Descreva o problema</label>

						<textarea id="problem-description" class="complain-description" name="problem-descriptor" placeholder="Dê uma descrição detalhada ao problema" maxlength="255" required></textarea>

						<div id="submit-btn-container">

							<button type="submit" id="submit-btn">Enviar reclamação</button>

						</div>

					</div>

				</div>

			</form>

		</main>

		<footer class="footer">

			<p>Handyman Group INC. &copy;2024</p>

		</footer>

	</body>

</html>
