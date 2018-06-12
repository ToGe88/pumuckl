

<div class="skill pizza grid__item grid--span-3 <?= e($backgroundColor == 'white', 'white') ?>">
	<div class="skill__title">
		<?= '<h3>'.$skill->title().'</h3>' ?>
	</div>

	<ul class="pizza-ul" data-pie-id="<?= $m->slug() . '--' . $i ?>">
		<? $percentage = $skill->percentage()->value() ?>
		<? $difference = 100 - $percentage; ?>

		<li class="pie-chart--percentage" data-value="<?= $percentage ?>" <?= e($backgroundClass != 'inverted', 'style="color:'.$aspect->domcolor()->value().'"')?>"<?= $percentage ?></li>
		<? if($difference != 0): ?>
			<li class="pie-chart--percentage-difference" data-value="<?= $difference ?>"><?= $difference ?></li>
		<? endif ?>
	</ul>
	<div id="<?= $m->slug() . '--' . $i ?>"></div>
	<div class="skill__description">
		<?= '<p>'.$skill->description().'</p>' ?>
	</div>
</div>