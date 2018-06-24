<article class="item-overview__item grid__item grid--span-10 align-self--center grid--height-20vh">
	<? $heightClass = 'grid--height-20vh' ?>
    <? if($item->productImage()->isNotEmpty()): ?>
		<? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => $heightClass, 'objectCover' => 'object-fit--cover','m' => $m, 'file' => $item->productImage()->toFile(), 'maxWidth' => 1000, 'maxHeight' => 2000, 'randWidth' => false)) ?>
  	<? else: ?>
  		Keine Datei ausgewählt!
  	<? endif ?>
  	<div class="item-overview__item__description">
	  	<? e($item->headline()->isNotEmpty(), '<h1>'.$item->headline().'</h1>', '<h1>'.$item->title().'</h1>') ?></h1>
		  <? e($item->text()->isNotEmpty(), '<p>'.$item->text()).'</p>' ?>
      <? snippet('items/product-form', ['product' => $item]) ?>
	 </div>
</article>
