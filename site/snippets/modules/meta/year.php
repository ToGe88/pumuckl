<section class="<?= $sectionName.'__section' ?> grid__item grid--span-6">
	<?= '<h5>'.l('headlines.year').'</h5>' ?>
	<a href="<?= page('home')->url().'/'.$urlClass .':'.$aspect->year() ?>">
		<?= $aspect->year() ?>
	</a>
</section>