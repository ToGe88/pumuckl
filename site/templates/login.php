<?php snippet('generals/header') ?>



<section class="form__wrapper grid__wrapper grid--span-8 grid--start-3">
  <div class="grid__holder grid--height-50vh" style="margin-top: 100px">
    <div class="grid--span-12">
      <h2>Logge dich ein. Nutze dafür den Zugangscode von Instagram!</h2>
    </div>
    <div class="grid--span-12">
      <?php if($error): ?>
        <div><p class="alert"><?= $page->alert()->html() ?></p></div>
      <?php endif ?>
      <form method="post">
        <div class="grid--span-12">
          <input type="password" id="password" name="password">
        </div>
        <div>
          <input type="submit" name="login" value="<?= $page->button()->html() ?>">
        </div>
      </form>
    </div>
  </div>
</section>

<?php snippet('generals/footer') ?>