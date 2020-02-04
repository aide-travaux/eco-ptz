<?php

namespace AideTravaux\EcoPTZ\Utils;

use AideTravaux\EcoPTZ\EcoPTZ;
use AideTravaux\EcoPTZ\Model\DataInterface;
use AideTravaux\EcoPTZ\Model\ConditionInterface;

abstract class DataFormater
{
    /**
     * @param mixed|null
     * @return array
     */
    public static function get($model = null): array
    {
        $array = EcoPTZ::toArray();

        if ($model instanceof DataInterface) {
            $array = \array_merge($array, [
                'montant' => EcoPTZ::get($model),
                'bareme' => EcoPTZ::getBareme($model),
                'plafond' => EcoPTZ::getPlafond($model)
            ]);
        }

        if ($model instanceof ConditionInterface) {
            $array = \array_merge($array, [
                'conditions' => EcoPTZ::resolveConditions($model),
                'isEligible' => EcoPTZ::isEligible($model)
            ]);
        }

        return $array;
    }
}
