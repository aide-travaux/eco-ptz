<?php

namespace AideTravaux\EcoPTZ\Tests\Database;

use PHPUnit\Framework\TestCase;
use AideTravaux\EcoPTZ\Database\Database;
use AideTravaux\EcoPTZ\Database\DatabaseInterface;
use AideTravaux\EcoPTZ\Database\DatabaseTrait;

class DatabaseTest extends TestCase
{
    public function testType()
    {
        $this->assertTrue(\is_array(Database::DB));
    }

    /**
     * @dataProvider classProvider
     */
    public function testClass($class)
    {
        $this->assertTrue(\class_exists($class));
    }

    /**
     * @dataProvider classProvider
     */
    public function testClassConstant($class)
    {
        $reflect = new \ReflectionClass($class);
        $constants = $reflect->getConstants();

        $this->assertNotFalse($reflect->getConstant('NOM'));
        $this->assertNotFalse($reflect->getConstant('CODE'));
    }

    /**
     * @depend testClassConstant
     * @dataProvider classProvider
     */
    public function testClassConstantType($class)
    {
        $this->assertTrue(\is_string($class::NOM));
        $this->assertTrue(\is_string($class::CODE));
    }

    public function classProvider()
    {
        return array_map(function($row) {
            return [ $row ];
        }, Database::DB);
    }

}
