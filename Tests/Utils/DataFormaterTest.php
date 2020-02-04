<?php

namespace AideTravaux\EcoPTZ\Tests\Utils;

use PHPUnit\Framework\TestCase;
use AideTravaux\EcoPTZ\Model\DataInterface;
use AideTravaux\EcoPTZ\Model\ConditionInterface;
use AideTravaux\EcoPTZ\Utils\DataFormater;

class DataFormaterTest extends TestCase
{
    public function testGet()
    {
        $this->assertTrue(\is_array(DataFormater::get()));
    }
}
