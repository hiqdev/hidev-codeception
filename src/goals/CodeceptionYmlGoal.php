<?php

/*
 * Codeception plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-codeception
 * @package   hidev-codeception
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\codeception\goals;

/**
 * Goal for codeception.yml config file.
 */
class CodeceptionYmlGoal extends \hidev\goals\TemplateGoal
{
    protected $_file = 'codeception.yml';

    public function actionLoad()
    {
        $this->module->runAction('codeception/bootstrap');
        parent::actionLoad();
    }
}
