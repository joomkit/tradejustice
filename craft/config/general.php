<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
    '*' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'baseUrl'  => getenv('CRAFTENV_BASE_URL'),
            'basePath' => getenv('CRAFTENV_BASE_PATH'),
            'siteUrl' => getenv('CRAFTENV_SITE_URL'),
        ),

        'omitScriptNameInUrls' => true,
        'enableTemplateCaching' => false,
        'cache' => false,

    ),

    'tjm.test' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'enableTemplateCaching' => false,
            'cache' => false,
            'generateTransformsBeforePageLoad' => false,
        ),
        'templateselectSubfolder' => 'pages/_types',
        'useCompressedJs' => false,
    ),

    'tjm.org.uk' => array(
        'devMode' => false,
        'environmentVariables' => array(
            'enableTemplateCaching' => true,
            'cache' => true,
            'generateTransformsBeforePageLoad' => false,
        ),
        'templateselectSubfolder' => 'pages/_types',
        'useCompressedJs' => true,
        'omitScriptNameInUrls' => true,

    ),


    'tjm.stagingbox.co.uk' => array(
        'devMode' => false,
        'cache' => true,
        'enableTemplateCaching' => true,
        'generateTransformsBeforePageLoad' => true,
        'templateselectSubfolder' => 'pages/_types',
    )


);