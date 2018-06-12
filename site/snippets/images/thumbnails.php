<div class="thumbnails__holder grid__item grid--span-12 grid__holder">
	<? foreach($files as $file): ?>
		<? snippet('images/figure', array('heightClass' => 'height--full', 'objectCover' => false, 'm' => $m, 'file' => $file, 'maxWidth' => 1500, 'maxHeight' => 1500, 'randWidth' => true)) ?>
	<? endforeach ?>
</div>