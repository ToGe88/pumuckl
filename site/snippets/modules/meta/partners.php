<section class="partner-items__section <?= $sectionName.'__section' ?> grid__item grid--span-6">
	<?= '<h5>'.l('headlines.partners').'</h5>' ?>
	<? foreach($items as $partner): ?>
		<? snippet('modules/meta/_partner', array('partner' => $partner, 'urlClass' => 'partner')) ?>
	<? endforeach ?>
</section>