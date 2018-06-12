<figure style="display: block" class="<? e($heightClass, $heightClass) ?> <? e($randWidth && $randWidth == 'true', 'grid__item grid--span-'.rand(3,5), 'grid__item grid--span-12') ?> ">
	
	<? $maxWidth = isset($maxWidth) ? $maxWidth : 2000 ?>
	<? $maxHeight = isset($maxHeight) ? $maxHeight : 2000 ?>
	<? $crop = isset($crop) ? $crop : false ?>
	<? $grayscale = $file->grayscale()->value() ?>	
	

	<? $img = thumb($file, array('width' => $maxWidth, 'height' => $maxHeight, 'crop' => $crop, 'grayscale' => false, 'quality' => 60)) ?>

	
	<?php if($user = $site->user()): ?>
		<? snippet('admin/file-info', array('file' => $img)); ?>
	<?php endif ?>
	<img class="<? e($objectCover, $objectCover) ?>" src="<?= $img->url() ?>" <? e($file->alt(), 'alt="'.$file->alt().'"') ?> />
	<? e($file->caption()->isNotEmpty(), '<figcaption>'.$file->caption().'</figcaption>') ?>
</figure>
