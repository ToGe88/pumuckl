<div id="login" class="grid__item grid--span-12">
<? if($user = $site->user()): ?>
  	<a href="<?= url('logout') ?>">Logout</a>
<? else: ?>
	<a href="<?= page('login')->url() ?>">Login</a>
<? endif ?>
</div>