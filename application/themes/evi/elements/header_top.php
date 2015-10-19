<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/bootstrap-modified.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/evi-custom.css">
    <link rel="stylesheet" type="text/css" href="<?php  echo $view->getThemePath()?>/css/fonts/typography.css">    
    <?php echo $html->css($view->getStylesheet('main.less'))?>
    <?php Loader::element('header_required', array('pageTitle' => $pageTitle));?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            )
            document.querySelector('head').appendChild(msViewportStyle)
        }
    </script>
    <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/js/jquery.mixitup.js"></script>
</head>
<body>

<div class="<?php echo $c->getPageWrapperClass()?>">
