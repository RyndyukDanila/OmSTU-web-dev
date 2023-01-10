<?php
   require_once("config.php");
   require_once("logic/db/db.php");
   require_once("static/include/header.php");
?>

<?php if (!isset($_SESSION['id'])){
	header('location: ' . BASE_URL . 'main.php');
}?>

<main class="main">
	<section class="user">
		<div class="user__container">
			<div class="user__image">
				<img src="static/img/user-photos/default-user.png" width="200px" alt="Фото юзера">
			</div>
			<div class="user__content">
				<div class="user__block-text block-text">
					<h1 class="block-text__title"><?php echo $_SESSION['username']?></h1>
					<div class="block-text__text user__email">Email: <?php echo $_SESSION['email']?></div>
			 <!-- <div class="block-text__text user__info">О себе: </div> -->
					<a href="<?php echo BASE_URL . "get-pet.php"; ?>" class="block-text__button button">Завести питомца</a>
				</div>

			</div>
		</div>
	</section>

<?php if (selectAll('pets', ['user_id' => $_SESSION['id']])): ?>

	<section class="breeds my-dogs">
		<div class="breeds__container">
			<div class="breeds__block-text block-text block-text__center">
				<h2 class="block-text__title">Мои <span>питомцы</span></h2>
			</div>

			<div class="breeds__items">

				<?php 
				$pets = selectAll('pets', ['user_id' => $_SESSION['id']]);
				foreach ($pets as $dog) {
					$breed = selectOne('breeds', ['id' => $dog['breed_id']]);
					$description = '
					<div class="block-text__text"> Порода: ' . $breed['name'] . 
						'<br>Пол: ' . $dog['gender'] . 
						'<br>Возраст: ' . $dog['age'] . '
					</div>
					';
					echo '
					<div class="breeds__item item-breeds">
						<div class="item-breeds__icon">
							<img src="static/img/breeds/' . $breed['name'] . '.png" width="108px" alt="Иконка породы собаки">
						</div>
						<div class="item-breeds__title">' . $dog['name'] . '</div>
						<div class="item-breeds__text">' . $description . '</div>
					</div>
					';
				}
				?>
			</div>
		</div>
	</section>

<?php endif; ?>

</main>

<?php
   require_once("static/include/footer.php");
?>