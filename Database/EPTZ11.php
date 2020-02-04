<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ11 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Installation d\'une PAC air/eau avec programmateur de chauffage';

    /**
     * @property string
     */
    const CODE = 'EPTZ-11';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [
        'Calorifugeage de l\'installation de production ou de distribution de chauffage ou d\'eau chaude sanitaire',
        'Installation d\'appareils de régulation et de programmation du chauffage',
        'Installation d\'équipements d\'individualisation des frais de chauffage ou d\'eau chaude sanitaire',
        'Dépose d\'une cuve à fioul'
    ];

}
