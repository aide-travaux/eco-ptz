<?php

namespace AideTravaux\EcoPTZ\Model;

interface DataInterface
{
    /**
     * Retourne le code travaux Ma Prime Rénov
     * @return string
     */
    public function getEcoPTZCodeTravaux(): string;

    /**
     * Retourne le type de projet
     * @return string
     */
    public function getEptzTypeProjet(): string;

    /**
     * Retourne le montant TTC des travaux déduit des aides financières
     * @return float
     */
    public function getCoutTTC(): float;

}
