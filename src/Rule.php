<?php

namespace Eig\Ruled;


class Rule
{
    protected $chain;

    public function __construct (Chain $chain)
    {
        $this->chain = $chain;
    }
}