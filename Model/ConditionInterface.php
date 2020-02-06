<?php

namespace AideTravaux\EcoPTZ\Model;

interface ConditionInterface
{
    public function getEcoPTZCodeTravaux(): string;

    public function getEptzTypeProjet(): string;

    public function getTypeLogement(): string;

    public function getStatutOccupantLogement(): string;

    public function getTypeOccupationLogement(): string;

    public function getAgeLogement(): int;

}
