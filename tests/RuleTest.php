<?php

namespace Eig\Ruled\Tests;

use Eig\Ruled\Rule;
use Eig\Ruled\Chain;

class RuleTest extends TestBaseClass
{
    public function testInstantiation() {
        $rule = new Rule(new Chain()I wI );
        $this->assertInstanceOf('Eig\Ruled\Rule', $rule);
    }


}
