<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ04 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Isolation des murs donnant sur l\'extérieur';

    /**
     * @property string
     */
    const CODE = 'EPTZ-04';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [];

}
