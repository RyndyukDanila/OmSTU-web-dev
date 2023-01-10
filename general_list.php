<?php
   include("config.php");
   include("logic/db/db.php");
   include("static/include/header.php");
?>

<main class="main">
	<section class="general-list">
		<div class="general-list__container">
			<div class="general-list__content">
				<div class="general-list__block-text block-text">
					<h1 class="block-text__title block-text__title_blue">Список пользователей:</h1>
					<?php 
					$stuff = selectAll('users');
					foreach ($stuff as $value) {
						echo '<div class="block-text__text"> Email: ' . $value['email'] . '</div>';
					}
					?>
				</div>
			</div>

			<div class="general-list__content">
				<div class="general-list__block-text block-text">
					<h1 class="block-text__title block-text__title_blue">Список собак:</h1>
					<?php 
					$stuff = selectAll('pets');
					foreach ($stuff as $value) {
						$breed = selectOne('breeds', ['id' => $value['breed_id']]);
						echo '<div class="block-text__text"> Кличка: ' . $value['name'] . '<br>Порода: ' . $breed['name'] . '<br>Пол: ' . $value['gender'] . '<br>Возраст: ' . $value['age'] . '</div>';
					}
					?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
   include("static/include/footer.php");
?>