<?php

namespace AideTravaux\EcoPTZ\Data;

use AideTravaux\Core\Entries as BaseEntries;
use AideTravaux\Anah\Categorie\Entries as AnahCategorieEntries;

abstract class Entries extends BaseEntries
{
    /**
     * @property array
     */
    const CATEGORIES_ANAH = AnahCategorieEntries::CATEGORIES_ANAH;

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

}
