<section class="client-items__section <?= $sectionName.'__section' ?> grid__item grid--span-6">
	<?= '<h5>'.l('headlines.clients').'</h5>' ?>
	<? foreach($items as $client): ?>
		<? snippet('modules/meta/_client', array('client' => $client, 'urlClass' => 'client')) ?>
	<? endforeach ?>
</section>