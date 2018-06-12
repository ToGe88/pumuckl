<section class="involvements-items__section <?= $sectionName.'__section' ?> grid__item grid--span-12">
	<div class="involvements-items__content">
		<? foreach($site->index()->filterBy('intendedTemplate','involvement-'.$aspectCategory)->sortBy('sort','asc') as $involvement): ?>
			<? snippet('modules/meta/_involvement', array('involvement' => $involvement, 'items' => $items, 'backgroundColor' => $backgroundColor, 'aspect' => $aspect)) ?>
		<? endforeach ?>
	</div>
</section>