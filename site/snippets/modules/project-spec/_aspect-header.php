<section class="aspect-header__wrapper wrapper grid__item <?= 'grid--start-'.$columnStart ?> <?= 'grid--end-'.$columnEnd ?> grid--height-90vh">
    <div class="aspect-header__holder">
        <div class="aspect-header__text padding-right--1x">
            <? if($page->template() == 'aspect'): ?>
                <? $project = $page->parent() ?>
                <? $clientPages = New Pages; ?>
                <? foreach($project->clients()->split(',') as $client): ?>
                    <? $clientPages = $clientPages->add($pages->index()->findBy('uid',$client)) ?>
                    
                <? endforeach ?>
                <? foreach($clientPages as $clientPage): ?>
                   <?= '<h3>'.$clientPage->title().'</h3>' ?>
                <? endforeach ?>
            <? endif ?>
        	<? e($aspect->headline()->isNotEmpty(), '<h1>'.$aspect->headline().'</h1>', '<h1>'.$aspect->title().'</h1>') ?></h1>
            <? e($aspect->description()->isNotEmpty(), '<p>'.$aspect->description()).'</p>' ?>
        </div>
        <div class="aspect-header__image">
            <? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => 'grid--height-100vh', 'objectCover' => 'object-fit--cover','m' => $aspect, 'file' => $img = $aspect->socialImage()->toFile(), 'maxWidth' => 2000, 'maxHeight' => 2000, 'randWidth' => false)) ?>
        </div>
    </div>
</section>
