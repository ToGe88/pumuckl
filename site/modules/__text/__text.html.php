<? $m = $module ?>



<?  
    if($m->start()->isNotEmpty()) {
        $columnStart = $m->start()->value();
    } else {
        $columnStart = '1';
    };

    if($m->end()->isNotEmpty()) {
        $columnEnd = $m->end()->value();
    } else {
        $columnEnd = '13';
    };

    if($m->push()->value() === 'true') {
    	$pushClass = 'push-col-'.$columnWidth;
    } else {
    	$pushClass = null;
    };

    if($m->paddingTop()->isNotEmpty() && $m->paddingTop()->value() != '0') {
        $sectionPaddingTop = 'padding-top--'.$m->paddingTop()->value().'x';
    } else {
        $sectionPaddingTop = 'padding-top--1x';
    };

    if($m->paddingBottom()->isNotEmpty() && $m->paddingBottom()->value() != '0') {
        $sectionPaddingBottom = 'padding-bottom--'.$m->paddingBottom()->value().'x';
    } else {
        $sectionPaddingBottom = 'padding-bottom--1x';
    };


?>

<section id="<?= $m->title()->lower() ?>" class="textarea__wrapper wrapper grid__item <?= 'grid--start-'.$columnStart ?> <?= 'grid--end-'.$columnEnd ?> <? e($pushClass, $pushClass) ?> <?= $sectionPaddingTop ?> <?= $sectionPaddingBottom ?> ">
    
	<div class="textarea__holder padding-left--1x padding-right--1x">
		<div class="textarea">
  			<?= $m->text()->kt() ?>
  		</div>
	</div>
</section>