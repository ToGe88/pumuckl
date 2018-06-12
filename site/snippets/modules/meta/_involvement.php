

<? $involvementPage = $site->index()->find($involvement); ?>

<? $aspectInvolvements = array(); ?>
<? foreach($items as $item): ?>
	<? array_unshift($aspectInvolvements, $item); ?>
<? endforeach ?> 
<div class="involvement-item<? e(in_array($involvementPage->uid(), $aspectInvolvements), ' involvement-item--active') ?>">
	<span class="dot involvement-dot" <? if($backgroundColor != 'primary' && in_array($involvementPage->uid(), $aspectInvolvements)){
	$color = $aspect->domcolor()->value();
	echo 'style="background: '.$color.'"';
} ?>
></span>
	<span class="line involvement-line" <? if($backgroundColor != 'primary' && in_array($involvementPage->uid(), $aspectInvolvements)){
	$color = $aspect->domcolor()->value();
	echo 'style="background: '.$color.'"';
} ?>
></span>
	<?= '<h4>'.$involvementPage->title().'</h4>'; ?>
</div>


