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
    public $isBuilt        = false;
    public $isBootstrapped = false;

    public function init()
    {
        parent::init();
        $this->actionLoad();
    }

    public function actionMake()
    {
        $this->actionConfig();
        $this->actionBuild();
        $this->actionRun();
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
        passthru('codecept run');
    }

    public function build()
    {
        passthru('codecept build');
    }

    public function actionBuild()
    {
        if (!$this->isBuilt) {
            $this->isBuilt = true;
            $this->build();
        }
    }

    public function bootstrap()
    {
        passthru('codecept bootstrap');
    }

    public function actionBootstrap($force = false)
    {
        if (!$this->isBootstrapped || $force) {
            $this->isBootstrapped = true;
            $this->bootstrap();
        }
    }
}
