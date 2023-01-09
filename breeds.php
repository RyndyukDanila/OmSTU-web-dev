<?php
   include("config.php");
   include("logic/db/db.php");
   include("static/include/header.php");
?>

<main class="main">
	<section class="breeds">
		<div class="breeds__container">
			<div class="breeds__block-text block-text block-text__center">
				<h2 class="block-text__title"><span>Породистая</span> собака имеет свои особенности.</h2>
				<div class="block-text__text block-text__text_maw">
								Lorem ipsum dolor sit amet consectetur adipisicing, elit. Dicta accusamus, vitae dolore asperiores nisi autem, porro placeat voluptas officiis molestias veniam deserunt, dolor.
				</div>
			</div>
			<div class="breeds__items">
			<?php 
				$stuff = selectAll('breeds');
				foreach ($stuff as $value) {
					echo '
					<div class="breeds__item item-breeds">
						<div class="item-breeds__icon">
							<img src="static/img/breeds/' . $value['name'] . '.png" width="108px" alt="Иконка породы собаки">
						</div>
						<div class="item-breeds__title">' . $value['name'] . '</div>
						<div class="item-breeds__text">' . $value['description'] . '</div>
					</div>
					';
				}
			?>
			</div>
		</div>
	</section>
</main>

<?php
   include("static/include/footer.php");
?>