<?
	if($device->start()->isNotEmpty()) {
        $columnStart = $device->start()->value();
    } else {
        $columnStart = '1';
    };

    if($device->span()->isNotEmpty()) {
        $columnSpan = $device->span()->value();
    } else {
        $columnSpan = '12';
    };

    if($device->zIndex()->isNotEmpty()) {
        $zIndex = $device->zIndex()->value();
    } else {
        $zIndex = '0';
    };

    if($device->bottom()->isNotEmpty()) {
        $bottom = $device->bottom()->value();
    } else {
        $bottom = '10%';
    };

?>

<? if($device->format() == 'laptop'): ?>

	<div class="device__holder <?= 'device--start-'.$columnStart ?> <?= 'device--span-'.$columnSpan ?>" style="z-index: <?= $zIndex ?>; bottom: <?= $bottom ?>">
		<div class="laptop">
		  <div class="laptop__display">
		    <figure class="laptop__figure">
		      <?php if($image = $device->annotatorImage()->toFile()): ?>
				<div class="device__image__holder">
					<?php foreach($device->annotatorField()->toStructure() as $pin): ?>
						<? $pinX = str_replace(',', '.', $pin->x()->value() * 100) ; ?>
						<? $pinY = str_replace(',', '.', $pin->y()->value() * 100) ; ?>

						<div class="device__pin" style="position: absolute; left: <?= $pinX  ?>%; top: <?= $pinY ?>%;"><?= $pin->note() ?></div>
					<?php endforeach ?>
					<img class="device__image" src="<?php echo $image->url() ?>">
				</div>
			<?php endif; ?>
		    </figure>
		  </div>
		  <div class="laptop__body"></div>
		</div>
	</div>

<? elseif($device->format() == 'tablet'): ?>

	<div class="device__holder <?= 'device--start-'.$columnStart ?> <?= 'device--span-'.$columnSpan ?>" style="z-index: <?= $zIndex ?>; bottom: <?= $bottom ?>">
		<div class="tablet">
		    <figure class="tablet__figure">
		      <?php if($image = $device->annotatorImage()->toFile()): ?>
				<div class="device__image__holder">
					<?php foreach($device->annotatorField()->toStructure() as $pin): ?>
						<? $pinX = str_replace(',', '.', $pin->x()->value() * 100) ; ?>
						<? $pinY = str_replace(',', '.', $pin->y()->value() * 100) ; ?>

						<div class="device__pin" style="position: absolute; left: <?= $pinX  ?>%; top: <?= $pinY ?>%;"><?= $pin->note() ?></div>
					<?php endforeach ?>
					<img class="device__image" src="<?php echo $image->url() ?>">
				</div>
			<?php endif; ?>
		    </figure>
		</div>
	</div>

<? elseif($device->format() == 'portrait'): ?>

	<div class="device__holder <?= 'device--start-'.$columnStart ?> <?= 'device--span-'.$columnSpan ?>" style="z-index: <?= $zIndex ?>; bottom: <?= $bottom ?>">
		<div class="tablet-portrait">
		    <figure class="tablet-portrait__figure">
		      <?php if($image = $device->annotatorImage()->toFile()): ?>
				<div class="device__image__holder">
					<?php foreach($device->annotatorField()->toStructure() as $pin): ?>
						<? $pinX = str_replace(',', '.', $pin->x()->value() * 100) ; ?>
						<? $pinY = str_replace(',', '.', $pin->y()->value() * 100) ; ?>

						<div class="device__pin" style="position: absolute; left: <?= $pinX  ?>%; top: <?= $pinY ?>%;"><?= $pin->note() ?></div>
					<?php endforeach ?>
					<img class="device__image" src="<?php echo $image->url() ?>">
				</div>
			<?php endif; ?>
		    </figure>
		</div>
	</div>

<? elseif($device->format() == 'mobile'): ?>

	<div class="device__holder <?= 'device--start-'.$columnStart ?> <?= 'device--span-'.$columnSpan ?>" style="z-index: <?= $zIndex ?>; bottom: <?= $bottom ?>">
		<div class="mobile">
		    <figure class="mobile__figure">
		      <?php if($image = $device->annotatorImage()->toFile()): ?>
				<div class="device__image__holder">
					<?php foreach($device->annotatorField()->toStructure() as $pin): ?>
						<? $pinX = str_replace(',', '.', $pin->x()->value() * 100) ; ?>
						<? $pinY = str_replace(',', '.', $pin->y()->value() * 100) ; ?>

						<div class="device__pin" style="position: absolute; left: <?= $pinX  ?>%; top: <?= $pinY ?>%;"><?= $pin->note() ?></div>
					<?php endforeach ?>
					<img class="device__image" src="<?php echo $image->url() ?>">
				</div>
			<?php endif; ?>
		    </figure>
		</div>
	</div>
<? endif ?>