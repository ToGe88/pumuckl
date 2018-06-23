<div class="menu">
	<div class="menu__holder grid__holder">
		<? $menuItems = new Pages; ?>
		<? $menuItems = $menuItems->add($page->moduleList()->filterBy('template', 'in', ['module.__text', 'module.__item-overview'])); ?>
		<? foreach($menuItems as $menuItem): ?>
			<div class="menu__item">
				<a href="<?= '#'.$menuItem->title()->lower() ?>"><?= $menuItem->title() ?></a>
			</div>
		<? endforeach ?>
	</div>
</div>