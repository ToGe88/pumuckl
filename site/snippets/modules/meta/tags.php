<div class="tag-items__section <?= $sectionName.'__section' ?> grid__item grid--span-6">
	<?= '<h5>'.l('headlines.'.$urlClass.'s').'</h5>' ?>
	<? foreach($items as $tag): ?>
		<? snippet('modules/meta/_tag', array('tag' => $tag, 'urlClass' => $urlClass)); ?>
	<? endforeach ?>
</div>