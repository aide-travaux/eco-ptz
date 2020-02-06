<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ16 implements DatabaseInterface
{
    use DatabaseTrait;
    
    /**
     * @property string
     */
    const NOM = 'Installation d\'équipement de chauffage fonctionnant à l\'énergie hydraulique ou à l\'énergie solaire';

    /**
     * @property string
     */
    const CODE = 'EPTZ-16';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [
        'Calorifugeage de l\'installation de production ou de distribution de chauffage ou d\'eau chaude sanitaire',
        'Installation d\'appareils de régulation et de programmation du chauffage',
        'Installation d\'équipements d\'individualisation des frais de chauffage ou d\'eau chaude sanitaire'
    ];

}
