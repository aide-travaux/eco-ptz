<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ18 implements DatabaseInterface
{
    use DatabaseTrait;
    
    /**
     * @property string
     */
    const NOM = 'Installation d\'une PAC dédiée à la production d\'eau chaude sanitaire';

    /**
     * @property string
     */
    const CODE = 'EPTZ-18';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [
        'Calorifugeage de l\'installation de production ou de distribution de chauffage ou d\'eau chaude sanitaire',
        'Installation d\'appareils de régulation et de programmation du chauffage',
        'Installation d\'équipements d\'individualisation des frais de chauffage ou d\'eau chaude sanitaire'
    ];

}
