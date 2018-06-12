<? $m = $module ?>
<?  
    if($m->backgroundColor()->isNotEmpty()) {
        $backgroundColor = $m->backgroundColor()->html();
    } else {
        $backgroundColor = 'white';
    };

    if($m->start()->isNotEmpty()) {
        $columnStart = $m->start()->value();
    } else {
        $columnStart = '1';
    };

    if($m->end()->isNotEmpty()) {
        $columnEnd = $m->end()->value();
    } else {
        $columnEnd = '13';
    };

    if($m->push()->value() === 'true') {
        $pushClass = 'push-col-'.$columnWidth;
    } else {
        $pushClass = null;
    };

    if($m->paddingTop()->isNotEmpty() && $m->paddingTop()->value() != '0') {
        $sectionPaddingTop = 'padding-top--'.$m->paddingTop()->value().'x';
    } else {
        $sectionPaddingTop = null;
    };

    if($m->paddingBottom()->isNotEmpty() && $m->paddingBottom()->value() != '0') {
        $sectionPaddingBottom = 'padding-bottom--'.$m->paddingBottom()->value().'x';
    } else {
        $sectionPaddingBottom = null;
    };

    if($m->moduleHeight()->isNotEmpty() && $m->moduleHeight()->value() != '0') {
        $sectionHeight = 'grid--height-'.$m->moduleHeight()->value() * 10 .'vh';
    } else {
        $sectionHeight = null;
    };
?>

<section class="statement__wrapper wrapper <?= $backgroundColor ?> grid__item <?= 'grid--start-'.$columnStart ?> <?= 'grid--end-'.$columnEnd ?> <? e($pushClass, $pushClass) ?> <?= $sectionPaddingTop ?> <?= $sectionPaddingBottom ?> <?= $sectionHeight ?>">
    <div class="content statement__content">
        <? snippet('admin/edit',['i' => $m, 'type' => 'module']) ?>
        <? $statements = $m->statements()->toStructure() ?>
        <? if($statements->count() > 1): ?>
            <div class="slider statement--slider" data-slider-autoslide="true" data-slider-vertical="true">
                <ul class="slides">
                    <? foreach($statements as $statement): ?>
                        <li class="statement__slide" style="display: grid !important">
                            <div class="statement__slide__content">
                                <div class="statement__text">
                                    <?= '<blockquote><p>'.$statement->statementText().'</p></blockquote>' ?>
                                    <?= e($statement->statementAuthor()->isNotEmpty(), '<cite><p>'.$statement->statementAuthor().'</p></cite>') ?>
                                </div>
                                <? if($statement->statementImage()->isNotEmpty()): ?>
                                    <div class="statement__image ">
                                        <? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => $sectionHeight, 'objectCover' => 'object-fit--cover','m' => $m, 'file' => $img = $statement->statementImage()->toFile(), 'maxWidth' => 3000, 'maxHeight' => 3000, 'randWidth' => false)) ?>
                                    </div>  
                                <? endif?>
                            </div>
                        </li>
                    <? endforeach ?>
                </ul>
            </div>

        <? else: ?>

            <? $statement = $m->statements()->toStructure()->first() ?>
            <div class="statement--single">
                <div class="statement__text grid__item grid--start-2 grid--end-8">
                    <?= '<blockquote><p>'.$statement->statementText().'</p></blockquote>' ?>
                    <?= e($statement->statementAuthor()->isNotEmpty(), '<cite><p>'.$statement->statementAuthor().'</p></cite>') ?>
                </div>
                <? if($statement->statementImage()->isNotEmpty()): ?>
                    <div class="statement__image grid__item grid--start-5 grid--end-13">
                        <? snippet('images/figure', array('backgroundImage' => true, 'heightClass' => $sectionHeight, 'objectCover' => 'object-fit--cover','m' => $m, 'file' => $file, 'maxWidth' => 3000, 'maxHeight' => 3000, 'randWidth' => false)) ?>
                    </div>  
                <? endif?>
            </div>
        <? endif ?>
    </div>
</section>
