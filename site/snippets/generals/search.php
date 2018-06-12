<div id="search" class="grid__item grid--span-10 justify-self--stretch align-self--stretch ">
	<form class="flex height--100p" action="<?= page('search')->url().'/' ?>">
	  	<input class="flex-item flex-grow--2" type="search" name="q" <? e($q = get('q'), 'value="'.$q.'"') ?>>
	  	<input class="flex-item flex-grow--1" type="submit" value="Search">
	</form>
</div>