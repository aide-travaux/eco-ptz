<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ17 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Installation de capteurs solaires pour la production d\'ECS ou les produits mixtes (ECS et chauffage)';

    /**
     * @property string
     */
    const CODE = 'EPTZ-17';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [
        'Calorifugeage de l\'installation de production ou de distribution de chauffage ou d\'eau chaude sanitaire',
        'Installation d\'appareils de régulation et de programmation du chauffage',
        'Installation d\'équipements d\'individualisation des frais de chauffage ou d\'eau chaude sanitaire'
    ];

}
