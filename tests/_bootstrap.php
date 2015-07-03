<?php

/*
 * Codeception plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-codeception
 * @package   hidev-codeception
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

error_reporting(-1);

define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);
$_SERVER['SCRIPT_NAME']     = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
Yii::setAlias('@hidev\codeception', dirname(__DIR__));
