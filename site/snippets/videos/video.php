Hier ist ein Video
<?
// stop without videos
if(empty($videos)) return;
// set some defaults
if(!isset($width))    $width    = 400;
if(!isset($height))   $height   = 300;
if(!isset($preload))  $preload  = true;
if(!isset($controls)) $controls = true;
// build the html tags for the video element
$preload  = ($preload)  ? ' preload="preload"'   : '';
$controls = ($controls) ? ' controls="controls"' : '';
?>
<video width="<?= $width ?>" height="<?= $height ?>"<?= $preload . $controls ?>>
  <? foreach($videos as $video): ?>
  <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>" />
  <? endforeach ?>
  <? if(isset($thumb)): ?>
  <img src="<?= $thumb->url() ?>" alt="<?= $thumb->title() ?>" />
  <? endif ?>
</video>