<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
    <div class="container">
        <div class="row">
            <div id= "fixed-sidebar" class="col-md-2 col-sidebar">
                <?php
                $a = new GlobalArea ('Sidebar Logo');
                $a->display($c);
                ?>
                <?php
                $a = new GlobalArea ('Sidebar');
                $a->display($c);
                ?>
                <?php
                $a = new GlobalArea ('Sidebar Social');
                $a->display($c);
                ?>
            </div>
            <div class="<?php if ($displayThirdColumn) { ?>col-sm-10 col-xs-10<?php } else { ?>col-md-12 col-xs-12<?php } ?> col-content">
                <?php
                $a = new Area('Portfolio Banner');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
                <?php
                $a = new Area('Portfolio Content');
                $a->setAreaGridMaximumColumns(12);
                $a->display($c);
                ?>
            </div>
        </div>
    </div>
</main>

<?php  $this->inc('elements/footer.php'); ?>
