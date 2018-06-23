<? $m = $module ?>

<section id="<?= $m->title()->lower() ?>" class="item-overview__wrapper wrapper grid__wrapper grid--start-1 grid--end-13">
    <? snippet('admin/edit', ['i' => $m, 'type' => 'module']) ?>
	<div class="item-overview__holder grid__holder">
		<div class="item-overview__title grid--span-12">
			<?= '<h3>'.$m->title().'</h3>' ?>
		</div>
		<? $items = New Pages; ?>
		<? foreach($m->items()->split(',') as $item): ?>
			<? $itemPage = $site->index()->findBy('uid',$item); ?>
			<? snippet('modules/_overview-item', array('item' => $itemPage, 'm' => $m)); ?>
		<? endforeach ?>
		
	</div>
</section>
