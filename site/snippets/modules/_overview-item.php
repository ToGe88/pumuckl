<article class="item-overview__item grid__item grid--span-10 align-self--center grid__holder">
	<? $heightClass = '' ?>
    <? if($item->productImage()->isNotEmpty()): ?>
      <div class="grid--span-3 padding-left--1x">
		    <? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => $heightClass, 'objectCover' => 'object-fit--cover','m' => $m, 'file' => $item->productImage()->toFile(), 'maxWidth' => 1000, 'maxHeight' => 2000, 'randWidth' => false)) ?>
      </div>
  	<? else: ?>
  		Keine Datei ausgewählt!
  	<? endif ?>
  	<div class=" grid--span-9 padding-left--1x padding-right--1x">
	  	<?= '<h1>'.$item->parent()->title().'</h1>' ?>
		  <? e($item->text()->isNotEmpty(), '<p>'.$item->text()).'</p>' ?>
      <?= '<h4>Inhalt: '.$item->size().'</h4>' ?>
      <? if($item->count()->value() == '0'): ?>
				<?= '<h4>Nicht mehr vorrätig. Nachschub ist auf dem Weg.</h4>' ?>
			<? else: ?>
				<?= '<h4>Noch '.$item->count()->value().' verfügbar.</h4>' ?>
      <? endif ?>
			<?= '<h2>Preis: '.$item->price()->value().'€ zzgl. Versand</h2>' ?>
      <? if($item->count()->value() != '0'): ?>
	  		<? snippet('items/product-form', ['product' => $item]) ?>
			<? endif ?>
	 </div>
</article>
