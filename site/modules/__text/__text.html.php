<? $m = $module ?>

<section id="<?= $m->title()->lower() ?>" class="textarea__wrapper grid__wrapper wrapper grid__item grid--span-12">
	<div class="textarea__holder grid__holder">
	    <div class="textarea__title grid--span-2 grid--start-1">
			<?= '<h5>'.$m->title().'</h5>' ?>
		</div>
		<div class="textarea__holder padding-left--1x padding-right--1x grid--span-10">
			<div class="textarea">
	            
	  			<?= $m->text()->kt() ?>
	  		</div>
		</div>
	</div>
</section>