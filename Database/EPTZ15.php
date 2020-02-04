<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ15 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Installation d\'un poêle à bois, foyer fermé, insert de cheminée intérieure ou cuisinière';

    /**
     * @property string
     */
    const CODE = 'EPTZ-15';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [
        'Calorifugeage de l\'installation de production ou de distribution de chauffage ou d\'eau chaude sanitaire',
        'Installation d\'appareils de régulation et de programmation du chauffage',
        'Installation d\'équipements d\'individualisation des frais de chauffage ou d\'eau chaude sanitaire'
    ];

}
