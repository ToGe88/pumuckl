<? $m = $module ?>

<section class="header-image__wrapper wrapper grid--span-12">
	<div class="header-image__holder grid__holder">
		<? if($m->hero()->isNotEmpty()): ?>
			<? if($m->hero()->toFile()->type() === 'image'): ?>
	  			<? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => 'height--full', 'm' => $m, 'file' => $m->hero()->toFile(), 'maxWidth' => 3200, 'maxHeight' => 3200, 'randWidth' => false, 'objectCover' => true)) ?>
	  		<? elseif($m->hero()->toFile()->type() === 'video'): ?>	
	  			<? snippet('videos/video') ?>
	  		<? endif ?>
	  	<? else: ?>
	  		Keine Datei ausgewählt!
	  	<? endif ?>
	</div>
</section>
