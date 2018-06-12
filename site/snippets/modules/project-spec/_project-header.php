<section class="project-header__wrapper wrapper grid__item <?= 'grid--start-'.$columnStart ?> <?= 'grid--end-'.$columnEnd ?> grid--height-90vh">
    <div class="project-header__holder">
        <div class="project-header__text">
        	<? $clientPages = New Pages; ?>
        	<? foreach($project->clients()->split(',') as $client): ?>
        		<? $clientPages = $clientPages->add($pages->index()->findBy('uid',$client)) ?>
        		
        	<? endforeach ?>
            <? foreach($clientPages as $clientPage): ?>
        	   <?= '<h3>'.$clientPage->title().'</h3>' ?>
            <? endforeach ?>
        	<? e($project->headline()->isNotEmpty(), '<h1>'.$project->headline().'</h1>', '<h1>'.$project->title().'</h1>') ?>
        	<? e($project->description()->isNotEmpty(), '<p>'.$project->description().'</p>') ?>
        </div>
        <div class="project-header__images">
            <? foreach($items->limit(4) as $aspect): ?>
                <? if($items->count() == '1'): ?>
                    <? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => 'grid--height-100vh', 'objectCover' => 'object-fit--cover','m' => $aspect, 'file' => $img = thumb($aspect->socialImage()->toFile(), array('width' => 2000)), 'maxWidth' => 2000, 'maxHeight' => 2000, 'randWidth' => false)) ?>

                <? elseif($items->count() == '2'): ?>
                    <div class="project-header__tile project-header__tile--half" style="background: #fff url('<?= thumb($aspect->socialImage()->toFile(), array('width' => 2000))->url() ?>') center center / cover">
                    </div>
                <? elseif($items->count() == '3'): ?>
                    <div class="project-header__tile project-header__tile--third" style="background: #fff url('<?= thumb($aspect->socialImage()->toFile(), array('width' => 2000))->url() ?>') center center / cover">
                    </div>
                <? elseif($items->count() == '4'): ?>
                    <div class="project-header__tile project-header__tile--quarter" style="background: #fff url('<?= thumb($aspect->socialImage()->toFile(), array('width' => 2000))->url() ?>') center center / cover">
                    </div>
                <? endif ?>
            <? endforeach ?>
            
            <svg class="hidden">
                <clipPath id="triangle--half" clipPathUnits="objectBoundingBox">
                    <polygon fill="#f00" points="1 0, 1 1, 0 1, 1 0" />
                </clipPath>
                <clipPath id="triangle--quarter-vertical" clipPathUnits="objectBoundingBox">
                    <polygon fill="#f00" points="1 0, 1 1, 0 .5, 1 0" />
                </clipPath>
                <clipPath id="triangle--quarter-horizontal" clipPathUnits="objectBoundingBox">
                    <polygon fill="#f00" points="0 1, .5 0, 1 1, 0 1" />
                </clipPath>
            </svg>
        </div>
        
    </div>
</section>
