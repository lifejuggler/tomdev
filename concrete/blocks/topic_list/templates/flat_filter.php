<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="ccm-block-topic-list-flat-filter controls">
<?php
if (is_object($tree)) {
    $node = $tree->getRootTreeNodeObject();
    if (is_object($node)) {
        $node->populateDirectChildrenOnly();?>
        <ol class="breadcrumb">
            <li><a href="<?php echo $view->controller->getTopicLink()?>"
                <?php if (!$selectedTopicID) { ?>class="ccm-block-topic-list-topic-selected active"<?php } ?> data-filter="all" ><?php echo t('All')?></a></li>

        <?php foreach($node->getChildNodes() as $child) { 
        $tag = $child->getTreeNodeDisplayName();
        $tag_name = str_replace(array(" ", "&", "amp;"), '', $tag); ?>
            <li><a data-filter=".<?php echo $tag_name ?>" class="filter" href="#">
                <?php echo $child->getTreeNodeDisplayName()?></a></li>
        <?php } ?>
        </ol>
    <?php } ?>
    </div>
<?php } ?>