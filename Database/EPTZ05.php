<?php

namespace AideTravaux\EcoPTZ\Database;

abstract class EPTZ05 implements DatabaseInterface
{
    use DatabaseTrait;
    
    /**
     * @property string
     */
    const NOM = 'Isolation des planchers bas sur sous-sol, vide sanitaire ou passage ouvert';

    /**
     * @property string
     */
    const CODE = 'EPTZ-05';

    /**
     * @property array
     */
    const TRAVAUX_ADDITIONNELS = [];

}
