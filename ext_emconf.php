<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Fox Handler',
    'description' => 'This extension provides a pageNotFoundHandler that is able to handle 403 responses.',
    'category' => 'system',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Philipp Kitzberger',
    'author_email' => 'typo3@kitze.net',
    'author_company' => '',
    'version' => '4.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
