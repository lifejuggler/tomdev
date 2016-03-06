<?php

/**
 * -----------------------------------------------------------------------------
 * Generated 2016-03-06T15:43:12-05:00
 *
 * @item      misc.do_page_reindex_check
 * @group     concrete
 * @namespace null
 * -----------------------------------------------------------------------------
 */
return array(
    'site' => 'evi-designs',
    'version_installed' => '5.7.5.1',
    'misc' => array(
        'access_entity_updated' => 1442250717,
        'do_page_reindex_check' => false,
        'user_timezones' => true,
        'latest_version' => '5.7.5.6',
    ),
    'permissions' => array(
        'model' => 'advanced',
    ),
    'editor' => array(
        'concrete' => array(
            'enable_filemanager' => '1',
            'enable_sitemap' => '1',
        ),
        'plugins' => array(
            'selected' => array(
                'undoredo',
                'underline',
                'concrete5lightbox',
                'specialcharacters',
                'table',
                'fontfamily',
                'fontsize',
                'fontcolor',
            ),
        ),
    ),
    'maintenance' => array(
        'version_job_page_num' => '155',
    ),
    'cache' => array(
        'blocks' => false,
        'assets' => false,
        'theme_css' => false,
        'overrides' => false,
        'pages' => '0',
        'full_page_lifetime' => 'default',
        'full_page_lifetime_value' => null,
    ),
    'theme' => array(
        'compress_preprocessor_output' => false,
    ),
);
