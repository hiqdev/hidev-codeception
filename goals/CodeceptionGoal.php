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
 * Goal for Codeception.
 */
class CodeceptionGoal extends \hidev\goals\DefaultGoal
{
    public function init()
    {
        $this->setDeps('codeception.yml');
    }

    public function save()
    {
        $this->actionFix();
    }

    public function actionBootstrap()
    {
        passthru('codeception bootstrap');
    }
}
