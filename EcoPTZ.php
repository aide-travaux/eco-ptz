<?php

namespace AideTravaux\EcoPTZ;

use AideTravaux\EcoPTZ\Data\Entries;
use AideTravaux\EcoPTZ\Model\DataInterface;
use AideTravaux\EcoPTZ\Model\ConditionInterface;
use AideTravaux\EcoPTZ\Repository\Repository;
use AideTravaux\EcoPTZ\Utils\ConditionsResolver;

abstract class EcoPTZ
{
    /**
     * @property string
     */
    const NOM = 'Éco-prêt à taux éro';

    /**
     * @property string
     */
    const DESCRIPTION = 'L\'éco-prêt à taux zéro est un prêt à taux d’intérêt nul et accessible sans condition de 
    ressources, pour financer des travaux d’amélioration de la performance énergétique';
    
    /**
     * @property string
     */
    const DELAI = 'Déblocage des fonds jusqu\'à trois ans avant le début des travaux';
    
    /**
     * @property string
     */
    const DISTRIBUTEUR = 'Banques partenaires';
    
    /**
     * @property array
     */
    const REFERENCES = [
        'https://www.ecologique-solidaire.gouv.fr/eco-pret-taux-zero-eco-ptz',
        'https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000020459597'
    ];

    /**
     * @property array
     */
    const CONDITIONS = [
        'Le logement est une maison individuelle ou un appartement',
        'Le demandeur est propriétaire occupant ou bailleur du logement',
        'Le logement est occupé à titre de résidence principale ou est destiné à l\'être',
        'Le logement ou l\'immeuble concerné est achevé depuis plus de deux ans à la date de début des 
        travaux et prestations',
        'Les travaux sont éligibles'
    ];

    /**
     * Retourne le montant de l'éco-prêt à taux zéro
     * @param DataInterface
     * @return float|null
     */
    public static function get(DataInterface $model): ?float
    {
        $base = Repository::getOneOrNull( $model->getEcoPTZCodeTravaux() );

        return ($base) ? (float) \min(
            $model->getCoutTTC(),
            self::getPlafond($model)
        ) : null;
    }

    /**
     * Retourne le barême de l'aide financière
     * @param DataInterface
     * @return array|null
     */
    public static function getBareme(DataInterface $model): ?array
    {
        $base = Repository::getOneOrNull( $model->getEcoPTZCodeTravaux() );

        return ($base) ? $base::toArray() : null;
    }

    /**
     * Retourne le plafond du montant de l'éco-prêt à taux zéro
     * @param DataInterface
     * @return int
     */
    public static function getPlafond(DataInterface $model): int
    {
        switch ($model->getEptzTypeProjet()) {
            case Entries::EPTZ_TYPES_PROJET['eptz_type_projet_1']:
                switch ($model->getEcoPTZCodeTravaux()) {
                    case 'EPTZ-06':
                        return 7000;
                    case 'EPTZ-07':
                        return 7000;
                    case 'EPTZ-08':
                        return 7000;
                    default:
                        return 15000;
                }
            case Entries::EPTZ_TYPES_PROJET['eptz_type_projet_2']:
                return 25000;
            case Entries::EPTZ_TYPES_PROJET['eptz_type_projet_3']:
                return 30000;
            case Entries::EPTZ_TYPES_PROJET['eptz_type_projet_4']:
                return 30000;
            case Entries::EPTZ_TYPES_PROJET['eptz_type_projet_5']:
                return 10000;
            default:
                return 0;
        }
    }

    /**
     * @see ConditionsResolver
     */
    public static function resolveConditions(ConditionInterface $model): array
    {
        return ConditionsResolver::resolveConditions($model);
    }

    /**
     * @see ConditionsResolver
     */
    public static function isEligible(ConditionInterface $model): bool
    {
        return ConditionsResolver::isEligible($model);
    }

    /**
     * @return array
     */
    public static function toArray(): array
    {
        return [
            'nom' => self::NOM,
            'description' => self::DESCRIPTION,
            'delai' => self::DELAI,
            'distributeur' => self::DISTRIBUTEUR,
            'references' => self::REFERENCES,
            'conditions' => self::CONDITIONS
        ];
    }

}
