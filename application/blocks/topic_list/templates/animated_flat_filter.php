<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="ccm-block-topic-list-flat-filter controls">
<?php
if (is_object($tree)) {
    $node = $tree->getRootTreeNodeObject();
    if (is_object($node)) {
        $node->populateDirectChildrenOnly();?>
        <ol class="breadcrumb">
            <li><a <?php if (!$selectedTopicID) { ?>class="filter"<?php } ?> data-filter="all" >
                <?php echo t('All')?></a></li>

        <?php foreach($node->getChildNodes() as $child) { 
        $tag = $child->getTreeNodeDisplayName();
        $tag_name = str_replace(array(" ", "&", "amp;"), '', $tag); ?>
            <li><a data-filter=".<?php echo $tag_name ?>" class="filter">
                <?php echo $child->getTreeNodeDisplayName()?></a></li>
        <?php } ?>
        </ol>
    <?php } ?>
    </div>
<?php } ?>