<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();

?>

<header>
    <div class="container">
        <div class="row">
            <div class="<?php if ($displayThirdColumn) { ?>col-sm-12 col-xs-12<?php } else { ?>col-sm-12 col-xs-12<?php } ?>">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
                <div id="mobile-header-bar-logo">
                    <img class= "center-header-logo" src="<?php echo $view->getThemePath()?>/images/Evi-designs_Browser_icon.png"> 
                        <span id="top-header-logo"> DESIGNS </span>
                    </img>
                </div>
            </div>
        </div>
    </div>
</header>