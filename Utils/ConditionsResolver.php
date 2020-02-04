<?php

namespace AideTravaux\EcoPTZ\Utils;

use AideTravaux\EcoPTZ\EcoPTZ;
use AideTravaux\EcoPTZ\Data\Entries;
use AideTravaux\EcoPTZ\Model\ConditionInterface;
use AideTravaux\EcoPTZ\Repository\Repository;

abstract class ConditionsResolver
{
    /**
     * Retourne les conditions d'accès satisfaites ou non
     * @param ConditionInterface
     * @return array
     */
    public static function resolveConditions(ConditionInterface $model): array
    {
        $conditions = EcoPTZ::CONDITIONS;

        return [
            [
                'condition' => $conditions[0],
                'value' => \in_array($model->getTypeLogement(), [
                    Entries::TYPES_LOGEMENT['type_logement_1'],
                    Entries::TYPES_LOGEMENT['type_logement_2']
                ])
            ], [
                'condition' => $conditions[1],
                'value' => \in_array($model->getStatutOccupantLogement(), [
                    Entries::STATUTS_OCCUPANT_LOGEMENT['statut_occupant_logement_1'],
                    Entries::STATUTS_OCCUPANT_LOGEMENT['statut_occupant_logement_2']
                ])
            ], [
                'condition' => $conditions[2],
                'value' => $model->getTypeOccupationLogement() 
                            === Entries::TYPES_OCCUPATION_LOGEMENT['type_occupation_logement_1']
            ], [
                'condition' => $conditions[3],
                'value' => $model->getAgeLogement() > 2
            ], [
                'condition' => $conditions[4],
                'value' => \in_array($model->getEptzTypeProjet(), [
                    Entries::TYPES_PROJET_EPTZ['type_projet_eptz_4'],
                    Entries::TYPES_PROJET_EPTZ['type_projet_eptz_5']
                ]) || !empty(Repository::getOneOrNull( $model->getEcoPTZCodeTravaux() ))
            ]
        ];
    }

    /**
     * Retourne l'éligibilité à l'aide financière
     * @param ConditionInterface
     * @return bool
     */
    public static function isEligible(ConditionInterface $model): bool
    {
        foreach (self::resolveConditions($model) as $condition) {
            if ($condition['value'] === false)  {
                return false;
            }
        }
        return true;
    }
}
