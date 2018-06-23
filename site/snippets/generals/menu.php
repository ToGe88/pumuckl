<div class="menu">
	<div class="menu__holder grid__holder">
		<div class="logo grid--span-3">
			<img src="<?= $site->images()->first()->url() ?>" width="200" />
		</div>
		<div class="anchors__holder grid__holder grid--span-4 grid--end-13">
			<? $menuItems = new Pages; ?>
			<? $menuItems = $menuItems->add($page->moduleList()->filterBy('template', 'in', ['module.__text', 'module.__item-overview'])); ?>
			<? foreach($menuItems as $menuItem): ?>
				<div class="menu__item grid--span-6">
					<a href="<?= '#'.$menuItem->title()->lower() ?>"><?= $menuItem->title() ?></a>
				</div>
			<? endforeach ?>
		</div>
	</div>
</div>