<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>" <? e($site->user(), 'class="logged-in"') ?>>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <!-- STYLING -->
  
  <?= css('/assets/css/grid.css') ?>

  <?= css('/assets/css/main.css') ?>
  
  

</head>
<body class="ibm">
	<header class="grid__wrapper">
	 <? snippet('generals/menu') ?>
	</header>
	<!-- MAIN CONTENT -->
	<main class="grid__wrapper">
		<article class="grid__holder">