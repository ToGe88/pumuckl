<? $m = $module ?>

<?  
    if($m->backgroundColor()->isNotEmpty()) {
        $backgroundColor = $m->backgroundColor()->html();
    } else {
        $backgroundColor = 'white';
    };
?> 

<? $items = New Pages; ?>
<? foreach($m->items()->split() as $item): ?>
	<? $itemPage = $site->index()->findBy('uid',$item); ?>
	<? $items = $items->add($itemPage) ?>

	<? if($year = param('year')): ?>
		<? $items = $items->filterBy('year', $year); ?>
	<? elseif($skill = param('skill')): ?>
		<? $items = $items->filterBy('skills', $skill, ','); ?>
	<? elseif($tag = param('tag')): ?>
		<? $items = $items->filterBy('tags', $tag, ','); ?>
	<? elseif($partner = param('partner')): ?>
		<? $items = $items->filterBy('partners', $partner, ','); ?>
	<? endif ?>
<? endforeach ?>
<section class="item-overview__wrapper wrapper <?= $backgroundColor ?> grid__wrapper grid--start-1 grid--end-13">
    <? snippet('admin/edit', ['i' => $m, 'type' => 'module']) ?>
	<div class="item-overview__holder grid__holder">
		<div class="item-overview__title grid--span-12">
			<?= '<h3>'.$m->title().'</h3>' ?>
		</div>
		<? foreach($items->filterBy('isPublished', true)->filterBy('isAccessible', true) as $item): ?>
			<? snippet('modules/_overview-item', array('item' => $item, 'm' => $m)); ?>
		<? endforeach ?>
	</div>
</section>
