<? if($page->relpages()->isNotEmpty()): ?>
	<? $items = New Pages; ?>
	<? foreach($page->relpages()->split() as $aspect): ?>
		<? $aspectPage = $site->index()->findBy('uid',$aspect); ?>
		<? $items = $items->add($aspectPage) ?>

	<? endforeach ?>

	<section class="relpages grid__item wrapper grid--start-1 grid--end-13">
		<div class="relpages-slider__holder grid__item grid--span-12">
			<div class="relpages-slider__content slider"  data-controls="true" data-navigation="false" data-carousel="true">
				<ul class="slides">
					<? foreach($items->filterBy('isPublished', true)->filterBy('isAccessible', true) as $relpage):  ?>
						<li class="slide relpages-slide" >
							<article class="relpage__content">
								<div class="relpage__text">
									<a href="<?= $relpage->url() ?>">

									<? e($relpage->headline()->isNotEmpty(), '<h1>'.$relpage->headline().'</h1>', '<h1>'.$relpage->title().'</h1>') ?></h1>
	            					<? e($relpage->description()->isNotEmpty(), '<p>'.$relpage->description()).'</p>' ?>
	            					</a>
								</div>
								<div class="relpage__image">
									<? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => 'grid--height-50vh', 'objectCover' => 'object-fit--cover','m' => $page, 'file' => $relpage->socialImage()->toFile(), 'maxWidth' => 3000, 'maxHeight' => 3000, 'randWidth' => false)) ?>
								</div>
							</article>
						</li>
					<? endforeach ?>
				</ul>
			</div>
		</div>
	</section>
<? endif ?>