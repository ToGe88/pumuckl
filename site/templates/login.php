<?php snippet('header') ?>

<h1><?= $page->title()->html() ?></h1>

<?php if($error): ?>
<div class="alert"><?= $page->alert()->html() ?></div>
<?php endif ?>

<form method="post">
  <div>
    <label for="password"><?= $page->password()->html() ?></label>
    <input type="password" id="password" name="password">
  </div>
  <div>
    <input type="submit" name="login" value="<?= $page->button()->html() ?>">
  </div>
</form>

<?php snippet('footer') ?>