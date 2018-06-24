<?php if(!$site->user()) go('/login') ?>

<?php snippet('generals/header') ?>

<section class="textarea__wrapper wrapper grid__item grid--start-1 grid--end-13">
    
	<div class="textarea__holder padding-left--1x padding-right--1x">
		<div class="textarea">
  			<?= $page->text()->kt() ?>
  		</div>
	</div>
</section>

<section id="products" class="wrapper grid__item grid--start-1 grid--end-13 padding-left--1x padding-right--1x">
	Hier kommen meine Produkte
	<? foreach($page->children()->filterBy('template', 'product') as $product): ?>
		<? snippet('items/product-form', ['product' => $product]) ?>
	<? endforeach ?>
</section>

<?php snippet('generals/footer') ?>