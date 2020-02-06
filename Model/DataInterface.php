<?php

namespace AideTravaux\EcoPTZ\Model;

interface DataInterface
{
    public function getEcoPTZCodeTravaux(): string;

    public function getEptzTypeProjet(): string;

    public function getCoutTTC(): float;

}
