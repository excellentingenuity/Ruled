<?php

namespace Eig\Ruled\Tests;

use Eig\Ruled\Rule;

class RuleTest extends TestBaseClass
{
    public function testInstantiation() {
        $rule = new Rule();
        $this->assertInstanceOf('Eig\Ruled\Rule', $rule);
    }
}
