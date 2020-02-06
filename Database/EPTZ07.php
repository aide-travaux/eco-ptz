<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ07 implements DatabaseInterface
{
    use DatabaseTrait;
    
    /**
     * @property string
     */
    const NOM = 'Pose de fenêtres en toitures';

    /**
     * @property string
     */
    const CODE = 'EPTZ-07';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [
        'Remplacement des portes d\'entrée donnant sur l\'extérieur',
        'Installation de volets isolants'
    ];

}
