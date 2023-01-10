<?php 
	require_once("config.php");
	require_once("logic/users.php"); 
	require_once("static/include/header.php");
?>

<?php if (isset($_SESSION['id'])){
	header('location: ' . BASE_URL . 'profile.php');
}?>

<main class="main">
	<div id="registration">
		<div class="registration-box">
			<form action="registration.php" method="post">
				<h1>Регистрация</h1>
				<div class="log-or-reg-error"><?=$errMsg?></div>
				<input type="text" name="username" placeholder="Имя пользователя" id="username" required="" />
				<input type="text" name="email" placeholder="Почта" id="username" required="" />
				<input type="password" name="pass" placeholder="Пароль" id="password" required="" />
				<input type="password" name="pass-repeat" placeholder="Повторите пароль" id="password" required="" />
				<input type="submit" name="btn-reg" value="Зарегистрироваться" />
			</form>
		</div>
	</div>
</main>

<?php require_once("static/include/footer.php"); ?>