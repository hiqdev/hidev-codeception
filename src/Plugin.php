<?php

/*
 * Codeception plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-codeception
 * @package   hidev-codeception
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\codeception;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'goals' => [
            'codeception'     => 'hidev\codeception\goals\CodeceptionGoal',
            'codeception.yml' => 'hidev\codeception\goals\CodeceptionYmlGoal',
            'install'         => [
                'requires' => [
                    'codeception/codeception' => '*',
                ],
            ],
        ],
        'views' => [
            '@hidev/codeception/views',
        ],
        'vcsignore' => [
            'tests/_support/_generated' => 'Codeception generated files',
        ],
    ];
}
