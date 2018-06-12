
<article class="item-overview__item grid__item grid--span-<?= rand(3,5) ?> align-self--center">
	<? $heightClass = 'grid--height-'.rand(4,7).'0vh' ?>
	<a href="<?= $item->url() ?>" class="base-link"></a>
	<? if($item->socialImage()->isNotEmpty()): ?>
		<? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => $heightClass, 'objectCover' => 'object-fit--cover','m' => $m, 'file' => $item->socialImage()->toFile(), 'maxWidth' => 1000, 'maxHeight' => 2000, 'randWidth' => false)) ?>
  	<? else: ?>
  		Keine Datei ausgewählt!
  	<? endif ?>
  	<div class="item-overview__item__description">
  		<? $project = $item->parent() ?>
        <? $clientPages = New Pages; ?>
        <? foreach($project->clients()->split(',') as $client): ?>
            <? $clientPages = $clientPages->add($pages->index()->findBy('uid',$client)) ?>
            
        <? endforeach ?>
        <? foreach($clientPages as $clientPage): ?>
           <?= '<h3>'.$clientPage->title().'</h3>' ?>
        <? endforeach ?>
	  	<? e($item->headline()->isNotEmpty(), '<h1>'.$item->headline().'</h1>', '<h1>'.$item->title().'</h1>') ?></h1>
		<? e($item->description()->isNotEmpty(), '<p>'.$item->description()).'</p>' ?>
	 </div>
</article>
