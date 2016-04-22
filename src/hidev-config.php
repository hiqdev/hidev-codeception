<?php

/*
 * Codeception plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-codeception
 * @package   hidev-codeception
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'codeception' => [
                'class' => 'hidev\codeception\goals\CodeceptionGoal',
            ],
            'codeception.yml' => [
                'class' => 'hidev\codeception\goals\CodeceptionYmlGoal',
            ],
            'binaries' => [
                'codecept' => [
                    'package'  => 'codeception/codeception',
                    'version'  => '^2.1',
                    'download' => 'http://codeception.com/codecept.phar',
                ],
            ],
            'views' => [
                '@hidev/codeception/views',
            ],
            'vcsignore' => [
                'tests/_support/_generated' => 'Codeception generated files',
            ],
        ],
    ],
];
