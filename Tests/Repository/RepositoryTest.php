<?php

namespace AideTravaux\EcoPTZ\Tests\Repository;

use PHPUnit\Framework\TestCase;
use AideTravaux\EcoPTZ\Repository\Repository;

class RepositoryTest extends TestCase
{
    public function testGetOneOrNull()
    {
        $this->assertTrue(\is_string(Repository::getOneOrNull('EPTZ-01')));
        $this->assertNull(Repository::getOneOrNull(''));
    }
}
