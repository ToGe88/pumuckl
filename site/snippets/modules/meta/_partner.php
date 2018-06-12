<? $partnerPage = $site->index()->findBy('uid', $partner); ?>
<a href="<?= page('home')->url().'/'.$urlClass .':'.$partnerPage->title()->lower() ?>">
		<?= '<h4>'.$partnerPage->title()->html().'</h4>' ?>
	</a>
<?= e($partnerPage->website()->isNotEmpty(), '<a href="'.$partnerPage->website()->html().'" target="_blank">'.$partnerPage->website()->html().'</a>') ?>