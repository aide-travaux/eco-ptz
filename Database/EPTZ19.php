<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ19 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Installation d\'équipement de fourniture d\'eau chaude sanitaire fonctionnant à l\'énergie hydraulique';

    /**
     * @property string
     */
    const CODE = 'EPTZ-19';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [
        'Calorifugeage de l\'installation de production ou de distribution de chauffage ou d\'eau chaude sanitaire',
        'Installation d\'appareils de régulation et de programmation du chauffage',
        'Installation d\'équipements d\'individualisation des frais de chauffage ou d\'eau chaude sanitaire'
    ];

}
