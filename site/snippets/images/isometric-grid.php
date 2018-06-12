<div class="isogrid__wrapper grid__item grid--span-12">
	<div class="isogrid__content twisted">
		<? foreach($files as $file): ?>
			<div class="isogrid__item">
				<? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => 'height--full', 'objectCover' => false, 'm' => $m, 'file' => $file, 'maxWidth' => 1000, 'randWidth' => false)) ?>
			</div>
		<? endforeach ?>
	</div>
	<div class="isogrid__toggle">
		<ul class="isogrid__toggle__options">
			<li class="isogrid__toggle__option active">
				Twist Grid
			</li>
		</ul>
	</div>
</div>
