<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ08 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Pose d\'une seconde fenêtre à double vitrage renforcé devant une fenêtre existante';

    /**
     * @property string
     */
    const CODE = 'EPTZ-08';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [
        'Remplacement des portes d\'entrée donnant sur l\'extérieur',
        'Installation de volets isolants'
    ];

}
