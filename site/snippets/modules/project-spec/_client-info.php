
<?  
        $sectionPaddingTop = 'padding-top--2x';
        $sectionPaddingBottom = 'padding-bottom--2x';
?>

<section class="client-info__wrapper wrapper primary grid__item <?= 'grid--start-'.$columnStart ?> <?= 'grid--end-'.$columnEnd ?> <?= $sectionPaddingTop ?> <?= $sectionPaddingBottom ?> margin-top--1x">
    <div class="client-info__holder padding-left--1x padding-right--1x">
    	<? $clientPages = New Pages; ?>
    	<? foreach($project->clients()->split(',') as $client): ?>
    		<? $clientPages = $clientPages->add($pages->index()->findBy('uid',$client)) ?>
    		

    	<? endforeach ?>
    	<? foreach($clientPages as $clientPage): ?>
    	   <div class="client-info__content">
    			<?= $clientPage->profile()->kt() ?>
    		</div>
        <? endforeach ?>
    </div>
</section>
