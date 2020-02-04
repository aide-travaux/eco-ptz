<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ03 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Isolation des rampants de toiture et plafonds de combles';

    /**
     * @property string
     */
    const CODE = 'EPTZ-03';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [];

}
