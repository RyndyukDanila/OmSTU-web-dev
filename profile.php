<?php
   require_once("config.php");
   require_once("logic/db/db.php");
   require_once("static/include/header.php");
?>

<main class="main">
	<section class="user">
		<div class="user__container">
			<div class="user__content">
				<div class="user__block-text block-text">
					<h1 class="block-text__title"><?php echo $_SESSION['username']?></h1>
					<div class="block-text__text user__email">Email: <?php echo $_SESSION['email']?></div>
			 <!-- <div class="block-text__text user__info">О себе: </div> -->
					<a href="<?php echo BASE_URL . "logout.php"; ?>" class="block-text__button button">ВЫЙТИ</a>
				</div>
			</div>

			<div class="user__image">
				<img src="static/img/user-photos/default-user-photo.png" alt="Фото юзера">
			</div>
		</div>
	</section>
</main>

<?php
   require_once("static/include/footer.php");
?>