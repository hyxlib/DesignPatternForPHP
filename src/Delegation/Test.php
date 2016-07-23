<?php
/**
 * Created by PhpStorm.
 * User: hyx
 * Date: 16-7-23
 * Time: 下午12:21
 */

namespace DesignPatternForPHP\Delegation;

use DesignPatternForPHP\Delegation\TeamLeader;

$coder = new TeamLeader(new Developer());

$coder->writeCode();