<?php

namespace AideTravaux\EcoPTZ\Data;

use AideTravaux\Core\Entries as CoreEntries;

abstract class Entries extends CoreEntries
{
    /**
     * @property array
     */
    const EPTZ_TYPES_PROJET = [
        'eptz_type_projet_1' => 'Action seule',
        'eptz_type_projet_2' => 'Bouquet de 2 travaux',
        'eptz_type_projet_3' => 'Bouquet de 3 travaux ou plus',
        'eptz_type_projet_4' => 'Performance énergétique globale',
        'eptz_type_projet_5' => 'Assainissement non collectif'
    ];

}
