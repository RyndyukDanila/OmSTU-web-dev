<?php
   require_once("config.php");
   require_once("logic/dogs.php");
   require_once("static/include/header.php");
?>

<?php if (!isset($_SESSION['id'])){
	header('location: ' . BASE_URL . 'main.php');
}?>

<main class="main">
	<div id="registration">
		<div class="registration-box">
			<form action="get-pet.php" method="post">
				<h1>Завести питомца</h1>
				<div class="log-or-reg-error"><?=$errMsg?></div>
				<input type="text" name="name" placeholder="Кличка" required="" />
				<input type="text" name="breed" placeholder="Порода" required="" />
				<input type="text" name="gender" placeholder="Пол" required="" />
				<input type="text" name="age" placeholder="Возраст" required="" />
				<input type="submit" name="btn-add" value="Добавить" />
			</form>
		</div>
	</div>
</main>

<?php require_once("static/include/footer.php"); ?>