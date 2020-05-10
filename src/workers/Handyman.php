<?php namespace workers;

use tools\Tool;

final class Handyman implements Worker
{
    private $tool;
    public function __construct(Tool $tool)
    {
        $this->tool = $tool;
    }

    public function work()
    {
        $this->tool->doSomething();
    }
}
