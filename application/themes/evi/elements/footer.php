<?php defined('C5_EXECUTE') or die("Access Denied.");

$footerSiteTitle = new GlobalArea('Footer Site Title');
$footerSocial = new GlobalArea('Footer Social');
$footerSiteTitleBlocks = $footerSiteTitle->getTotalBlocksInArea();
$footerSocialBlocks = $footerSocial->getTotalBlocksInArea();
$displayFirstSection = $footerSiteTitleBlocks > 0 || $footerSocialBlocks > 0 || $c->isEditMode();

?>

<footer id="footer-theme">
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
            <?php
            $a = new GlobalArea('Footer Nav');
            $a->display();
            ?>
            </div>
            <div class="col-sm-2">
            <?php
            $a = new GlobalArea('Footer Logo');
            $a->display();
            ?>
            </div>
        </div>
    </div>
    </section>
</footer>

<footer id="concrete5-brand">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span class="pull-right">
                    <?php echo Core::make('helper/navigation')->getLogInOutLink()?>
                </span>
            </div>
        </div>
    </div>
</footer>


<?php $this->inc('elements/footer_bottom.php');?>
