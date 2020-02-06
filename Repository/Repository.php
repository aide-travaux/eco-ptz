<?php

namespace AideTravaux\EcoPTZ\Repository;

use AideTravaux\EcoPTZ\Database\Database;

abstract class Repository extends Database
{
    /**
     * Retourne un ouvrage correspondant au code en paramètre
     * @param string
     * @return array
     */
    public static function getOneOrNull(string $code): ?string
    {
        $result = array_filter(self::DB, function($class) use ($code) {
            return $code === $class::CODE;
        });

        return ($result) ? current($result) : null;
    }
}
