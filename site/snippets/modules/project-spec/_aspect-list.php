<?  
	$sectionPaddingTop = 'padding-top--2x';
	$sectionPaddingBottom = 'padding-bottom--2x';


    $backgroundColor = 'light-grey';


    if($backgroundColor == 'primary' or 'black') {
        $backgroundClass = 'inverted';
    } else {
        $backgroundClass = null;
    };
?>

<section class="aspect-list__wrapper wrapper grid__item <?= 'grid--start-'.$columnStart ?> <?= 'grid--end-'.$columnEnd ?> <?= $backgroundColor ?> <?= $sectionPaddingTop ?> <?= $sectionPaddingBottom ?> margin-bottom--1x" >
    <div class="aspect-list__holder padding-left--1x padding-right--1x">
    	<? foreach($items as $aspect): ?>
	    	<? $aspectTextFields = New Pages; ?>
	    	<? $aspectTexts = $aspectTextFields->add($aspect->moduleList()->filterBy('intendedTemplate','module.__text')) ?>
    		
	    	<? if($aspectTexts->count() > 0): ?>
	    		<?= '<h4>'.$aspect->title().'</h4>' ?>
			    <? foreach($aspectTexts as $aspectListItem): ?>
			    	<a href="#<?= $aspectListItem->slug() ?>"><?= '<h3>'.$aspectListItem->title().'</h3>' ?></a>
			    <? endforeach ?>
			<? endif ?>
	    <? endforeach ?>
	    
    </div>
</section>
