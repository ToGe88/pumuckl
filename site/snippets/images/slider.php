<div class="slider__holder grid__item grid--span-12" data-controls="false" data-navigation="false">
	<div class="slider__content slider" style="">
		<ul class="slides">
			<? foreach($files as $file): ?>
				<li class="slide">
					<? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => $heightClass, 'objectCover' => 'object-fit--cover','m' => $m, 'file' => $file, 'maxWidth' => 3000, 'maxHeight' => 3000, 'randWidth' => false)) ?>
				</li>
			<? endforeach ?>
		</ul>
	</div>
</div>