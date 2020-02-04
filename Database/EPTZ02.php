<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ02 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Isolation des rampants de toiture et plafonds de combles';

    /**
     * @property string
     */
    const CODE = 'EPTZ-02';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [];

}
