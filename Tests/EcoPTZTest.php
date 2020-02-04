<?php

namespace AideTravaux\EcoPTZ\Tests;

use PHPUnit\Framework\TestCase;
use AideTravaux\EcoPTZ\EcoPTZ;
use AideTravaux\EcoPTZ\Data\Entries;
use AideTravaux\EcoPTZ\Model\DataInterface;

class EcoPTZTest extends TestCase
{
    /**
     * @dataProvider modelProvider
     */
    public function testGet($model)
    {
        $value = EcoPTZ::get($model);
        $this->assertTrue(\is_null($value) || \is_float($value));
    }

    /**
     * @dataProvider modelProvider
     */
    public function testGetBareme($model)
    {
        $value = EcoPTZ::getBareme($model);
        $this->assertTrue(\is_null($value) || \is_array($value));
    }

    /**
     * @dataProvider modelProvider
     */
    public function testGetPlafond($model)
    {
        $value = EcoPTZ::getPlafond($model);
        $this->assertTrue(\is_int($value));
    }

    public function testToArray()
    {
        $this->assertTrue(\is_array(EcoPTZ::toArray()));
    }

    public function modelProvider()
    {
        $stub = $this->createMock(DataInterface::class);

        $stub->method('getEcoPTZCodeTravaux')->willReturn('EPTZ-01');
        $stub->method('getEptzTypeProjet')->willReturn(Entries::TYPES_PROJET_EPTZ['type_projet_eptz_1']);
        $stub->method('getCoutTTC')->willReturn((float) 1);        

        return [ [ $stub ] ];
    }
}
