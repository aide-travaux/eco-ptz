<?php

namespace AideTravaux\EcoPTZ\Data;

abstract class Entries
{
    /**
     * @property array
     */
    const TYPES_PROJET_EPTZ = [
        'type_projet_eptz_1' => 'Action seule',
        'type_projet_eptz_2' => 'Bouquet de 2 travaux',
        'type_projet_eptz_3' => 'Bouquet de 3 travaux ou plus',
        'type_projet_eptz_4' => 'Performance énergétique globale',
        'type_projet_eptz_5' => 'Assainissement non collectif'
    ];

    /**
     * @property array
     */
    const TYPES_LOGEMENT = [
        'type_logement_1' => 'Maison individuelle',
        'type_logement_2' => 'Appartement',
        'type_logement_3' => 'Bâtiment collectif'
    ];

    /**
     * @property array
     */
    const STATUTS_OCCUPANT_LOGEMENT = [
        'statut_occupant_logement_1' => 'Propriétaire occupant',
        'statut_occupant_logement_2' => 'Propriétaire bailleur',
        'statut_occupant_logement_3' => 'Locataire',
        'statut_occupant_logement_4' => 'Occupant à titre gratuit'
    ];

    /**
     * @property array
     */
    const TYPES_OCCUPATION_LOGEMENT = [
        'type_occupation_logement_1' => 'Résidence principale',
        'type_occupation_logement_2' => 'Résidence secondaire'
    ];

}
