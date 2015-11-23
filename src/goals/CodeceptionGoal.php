<?php

/*
 * Codeception plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-codeception
 * @package   hidev-codeception
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\codeception\goals;

/**
 * Goal for Codeception.
 */
class CodeceptionGoal extends \hidev\goals\DefaultGoal
{
    public $isBuilt        = false;
    public $isBootstrapped = false;

    public function actionMake()
    {
        return $this->runActions('load, config, build, run');
    }

    public function actionLoad()
    {
        $this->isBootstrapped = $this->config->get('codeception.yml')->exists();
    }

    public function actionConfig()
    {
        $this->module->runAction('codeception.yml');
    }

    public function actionRun()
    {
        return $this->passthru('codecept', 'run');
    }

    public function build()
    {
        return $this->passthru('codecept', 'build');
    }

    public function actionBuild()
    {
        if (!$this->isBuilt) {
            $this->isBuilt = true;
            return $this->build();
        }
    }

    public function bootstrap()
    {
        return $this->passthru('codecept', 'bootstrap');
    }

    public function actionBootstrap($force = false)
    {
        if (!$this->isBootstrapped || $force) {
            $this->isBootstrapped = true;
            return $this->bootstrap();
        }
    }
}
