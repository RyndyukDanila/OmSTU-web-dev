<?php
   include("config.php");
   include("logic/db/db.php");
   include("static/include/header.php");
?>

<main class="main">
	<section class="get-started">
		<div class="get-started__container">
			<div class="get-started__content">
				<div class="get-started__block-text block-text">
					<h1 class="block-text__title block-text__title_blue">Список пользователей:</h1>
					<?php 
					$stuff = selectAll('users');
					foreach ($stuff as $value) {
						echo '<div class="block-text__text"> Email: ' . $value['email'] . '</div>';
					}
					?>
				</div>
			</div>
			<div class="get-started__image">
				<img src="static/img/get-started/blue-vec.svg" alt="Картинка собаки и ее владельца">
			</div>
		</div>
	</section>
</main>

<?php
   include("static/include/footer.php");
?>