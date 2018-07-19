<!DOCTYPE html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>" <? e($site->user(), 'class="logged-in"') ?>>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/favicon-16x16.png">
  <link rel="manifest" href="./assets/favicons/site.webmanifest">
  <link rel="mask-icon" href="./assets/favicons/safari-pinned-tab.svg" color="#000000">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  <!-- STYLING -->
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono|IBM+Plex+Sans:400,500,600,700" rel="stylesheet">
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