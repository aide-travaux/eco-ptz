<?php

namespace AideTravaux\EcoPTZ\Database;

trait DBTrait
{
    /**
     * @inheritdoc
     */
    public static function toArray(): array
    {
        return [
            'nom' => self::NOM,
            'code' => self::CODE,
            'travaux_additionnels' => self::TRAVAUX_ADDITIONNELS
        ];
    }
}
