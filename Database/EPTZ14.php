<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ14 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Installation d\'une chaudière bois';

    /**
     * @property string
     */
    const CODE = 'EPTZ-14';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [
        'Calorifugeage de l\'installation de production ou de distribution de chauffage ou d\'eau chaude sanitaire',
        'Installation d\'appareils de régulation et de programmation du chauffage',
        'Installation d\'équipements d\'individualisation des frais de chauffage ou d\'eau chaude sanitaire'
    ];

}
