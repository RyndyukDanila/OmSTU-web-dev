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
					<h1 class="block-text__title block-text__title_blue"><span>Питомец</span> бесценен.</h1>
					<div class="block-text__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum illum ab similique aperiam adipisci, quo.</div>
					<a href="<?php echo BASE_URL . "dog.php"; ?>" class="block-text__button button">Завести питомца</a>
				</div>
			</div>
			<div class="get-started__image">
				<img src="static/img/get-started/blue-vec.svg" alt="Картинка собаки и ее владельца">
			</div>
			<div class="get-started__video">
				<a href="" class=" video-get-started">
					<div class="video-get-started-icon">
						<img src="static/img/get-started/play.svg" width="44px" alt="Кнопка Play">
					</div>
					<div class="video-get-started__body">
						<div class="video-get-started__title">Правильно ухаживай за своим питомцем</div>
						<div class="video-get-started__text">Посмотреть видео</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section class="dog-breed">
		<div class="dog-breed__container">
			<div class="dog-breed__image">
				<div class="image-dog-breed">
					<div class="image-dog-breed__image">
						<img src="static/img/dog-breed/blue-dog-breed.svg" alt="Картинка собаки в ветклинике">
					</div>
					<div class="image-dog-breed__item image-dog-breed__item_1"></div>
					<div class="image-dog-breed__item image-dog-breed__item_2"></div>
					<div class="image-dog-breed__item image-dog-breed__item_3"></div>
				</div>
			</div>
			<div class="dog-breed__content">
				<div class="dog-breed__block-text block-text">
					<h2 class="block-text__title">Узнай больше о породе своей собаки.</h2>
					<div class="block-text__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, nisi magni fugiat dolore.</div>
					<a href="<?php echo BASE_URL . "breeds.php"; ?>" class="block-text__button button">ПОРОДЫ</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
   include("static/include/footer.php");
?>