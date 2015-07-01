<?php

namespace hidev\codeception\tests\unit;

use Yii;
use hidev\codeception\Plugin;

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
