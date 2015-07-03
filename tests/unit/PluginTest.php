<?php

/*
 * Codeception plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-codeception
 * @package   hidev-codeception
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\codeception\tests\unit;

use hidev\codeception\Plugin;
use Yii;

class PluginTest extends \PHPUnit_Framework_TestCase
{
    public $sample;

    protected function setUp()
    {
        $this->sample = Yii::createObject([
            'class' => Plugin::className(),
        ]);
    }

    protected function tearDown()
    {
        $this->sample = null;
    }

    public function testConstruct()
    {
        $this->assertNotNull($this->sample);
    }
}
