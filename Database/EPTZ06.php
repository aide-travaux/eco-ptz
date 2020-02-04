<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ06 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Pose de fenêtres ou portes-fenêtres';

    /**
     * @property string
     */
    const CODE = 'EPTZ-06';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [
        'Remplacement des portes d\'entrée donnant sur l\'extérieur',
        'Installation de volets isolants'
    ];

}
