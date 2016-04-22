<?php

/*
 * Codeception plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-codeception
 * @package   hidev-codeception
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\codeception\tests\unit\goals;

use hidev\codeception\goals\CodeceptionYmlGoal;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-04-22 at 13:00:41.
 */
class CodeceptionYmlGoalTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var CodeceptionYmlGoal
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new CodeceptionYmlGoal('codeception.yml', null);
    }

    protected function tearDown()
    {
    }

    public function testObject()
    {
        $this->assertInstanceOf(CodeceptionYmlGoal::class, $this->object);
    }
}