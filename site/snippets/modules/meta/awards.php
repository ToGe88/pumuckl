<section class="award-items__section <?= $sectionName.'__section' ?> grid__item grid--span-6">
	<?= '<h5>'.l('headlines.awards').'</h5>' ?>
	<? foreach($aspect->awards()->toStructure() as $award): ?>
		<? snippet('modules/meta/_award', array('award' => $award, 'urlClass' => 'awards')) ?>
	<? endforeach ?>
</section>