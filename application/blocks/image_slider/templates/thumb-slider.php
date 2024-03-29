<?php defined('C5_EXECUTE') or die("Access Denied.");
$navigationTypeText = ($navigationType == 0) ? 'arrows' : 'pages';
$c = Page::getCurrentPage();
$idx = 1;
if ($c->isEditMode()) { ?>
    <div class="ccm-edit-mode-disabled-item" style="width: <?php echo $width; ?>; height: <?php echo $height; ?>">
        <div style="padding: 40px 0px 40px 0px"><?php echo t('Image Slider disabled in edit mode.')?></div>
    </div>
<?php  } else { ?>
<script>
$(document).ready(function(){
    $(function () {
        $("#ccm-image-slider-<?php echo $bID ?>").responsiveSlides({
            prevText: "",   // String: Text for the "previous" button
            nextText: "",
            nav:false,
            pager: false,
            manualControls: '#gallery-slider'
        });
    });
});
</script>

<div class="ccm-image-slider-container ccm-block-image-slider-<?php echo $navigationTypeText?>" >
    <div class="ccm-image-slider">
        <div class="ccm-image-slider-inner">

        <?php if(count($rows) > 0) { ?>
        <ul class="rslides" id="ccm-image-slider-<?php echo $bID ?>">
            <?php foreach($rows as $row) { ?>
                <li>
                <?php if($row['linkURL']) { ?>
                    <a href="<?php echo $row['linkURL'] ?>" class="mega-link-overlay"></a>
                <?php } ?>
                <?php
                $f = File::getByID($row['fID'])
                ?>
                <?php if(is_object($f)) {
                    $tag = Core::make('html/image', array($f, false))->getTag();
                    if($row['title']) {
                    	$tag->alt($row['title']);
                    }else{
                    	$tag->alt("slide"); 
                    }
                    print $tag; ?>
                <?php } ?>
                <div class="ccm-image-slider-text">
                    <?php if($row['title']) { ?>
                    	<h2 class="ccm-image-slider-title"><?php echo $row['title'] ?></h2>
                    <?php } ?>
                    <?php echo $row['description'] ?>
                </div>
                </li>
            <?php } ?>
        </ul>
        <ul id="gallery-slider">
            <?php $type = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle('gallery');
                foreach($rows as $row) { ?>
                    <?php $file = File::getByID($row['fID']); ?>
                    <li>
                    <?php if (is_object($file)) { ?> 
                        <?php $src = $file->getThumbnailURL($type->getBaseVersion()); ?>
                        <div class="thumbnail">
                            <a href="#">
                                <img src=" <?php echo $src ?>" />
                            </a>
                        </div>
                    <?php } ?> 
                    </li>
            <?php } ?>
        </ul>
        <?php } else { ?>
        <div class="ccm-image-slider-placeholder">
            <p><?php echo t('No Slides Entered.'); ?></p>
        </div>
        <?php } ?>
        </div>

    </div>
</div>
<?php } ?>
