<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ03 implements DatabaseInterface
{
    use DatabaseTrait;
    
    /**
     * @property string
     */
    const NOM = 'Isolation d\'une toiture terrasse';

    /**
     * @property string
     */
    const CODE = 'EPTZ-03';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [];

}
