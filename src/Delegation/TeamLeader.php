<?php

/**
 * Created by PhpStorm.
 * User: hyx
 * Date: 16-7-23
 * Time: 上午11:59
 */
namespace DesignPatternForPHP\Delegation;

class TeamLeader
{
    protected $buddy;

    public function __construct(Developer $coder)
    {
        $this->buddy = $coder;
    }

    public function writeCode(){
        return $this->buddy->writeCode();
    }
}