<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<main>
    <div class="container">
        <div class="row">
            <div id= "fixed-sidebar" class="col-md-2 col-sidebar">
                <?php
                $a = new GlobalArea('Sidebar Logo');
                $a->display($c);
                ?>
                <?php
                $a = new GlobalArea('Sidebar');
                $a->display($c);
                ?>
                <?php
                $a = new GlobalArea('Sidebar Social');
                $a->display($c);
                ?>
            </div>
            <div class="col-sm-8 col-content">
                <div class="row portfolio-detail-banner">
                    <div class="col-md-9">
                        <?php
                        $a = new GlobalArea('Portfolio Link');
                        $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-3">
                        <?php
                        $a = new GlobalArea('Portfolio Logo');
                        $a->display($c);
                        ?>
                    </div>
                </div>
                <?php
                $a = new Area('Portfolio Detail Content');
                $a->setAreaGridMaximumColumns(12);
                
                $a->display($c);
                ?>
            </div>
        </div>
    </div>
</main>

<?php  $this->inc('elements/footer.php'); ?>
