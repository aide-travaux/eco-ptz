<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ01 implements DBInterface
{
    use DBTrait;
    
    /**
     * @property string
     */
    const NOM = 'Isolation des planchers de combles perdus';

    /**
     * @property string
     */
    const CODE = 'EPTZ-01';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [];

}
