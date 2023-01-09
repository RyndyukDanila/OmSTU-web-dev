<?php 
	require_once("config.php");
	require_once("logic/users.php"); 
	require_once("static/include/header.php");
?>

<main class="main">
	<div id="login">
		<div class="login-box">
			<form action="login.php" method="post">
				<h1>Вход в аккаунт</h1>
				<div class="log-or-reg-error"><?=$errMsg?></div>
				<input type="text" name="email" placeholder="Почта" id="username" required="">
				<input type="password" name="password" placeholder="Пароль" required="" id="password">
				<input type="submit" value="Войти" name="btn-log"/>
			</form>
		</div>
	</div>
</main>

<?php require_once("static/include/footer.php"); ?>