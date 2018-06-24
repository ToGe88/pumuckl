<?php if(!$site->user()) go('/login') ?>
<?php snippet('generals/header') ?>

<? $page->modules() ?>

<?php snippet('generals/footer') ?>