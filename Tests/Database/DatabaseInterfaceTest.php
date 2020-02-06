<?php

namespace AideTravaux\EcoPTZ\Tests\Database;

use PHPUnit\Framework\TestCase;
use AideTravaux\EcoPTZ\Database\Database;
use AideTravaux\EcoPTZ\Database\DatabaseInterface;

class DatabaseInterfaceTest extends TestCase
{
    /**
     * @dataProvider classProvider
     */
    public function testClassInterface($class)
    {
        $this->assertTrue(\in_array(DatabaseInterface::class, \class_implements($class)));
    }

    public function classProvider()
    {
        return array_map(function($row) {
            return [ $row ];
        }, Database::DB);
    }

}
