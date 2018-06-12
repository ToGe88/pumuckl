<nav id="languages" class="grid__item grid--span-2 justify-self--stretch align-self--stretch">
  <ul class="languages-menu flex height--100p">
    <? foreach($site->languages() as $language): ?>
    <? if(!$page->isTranslated()): ?>
  		<? $disabled = 'disabled' ?>
  	<? else: ?>
  		<? $disabled = null ?>
  	<? endif ?>
    <li class="languages-item<?php e($site->language() == $language, ' is-active') ?> <?= $disabled ?> flex-item flex-grow--1">
      <a href="<?= $page->url($language->code()) ?>"><?= str::upper($language->code()) ?></a>
    </li>
    <? endforeach ?>
  </ul>
</nav>
