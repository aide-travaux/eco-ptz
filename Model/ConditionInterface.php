<?php

namespace AideTravaux\EcoPTZ\Model;

interface ConditionInterface
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
     * Retourne le type de logement
     * @return string
     */
    public function getTypeLogement(): string;

    /**
     * Retourne le statut des occupants du logement
     * @return string
     */
    public function getStatutOccupantLogement(): string;

    /**
     * Retourne le type d'occupation du logement
     * @return string
     */
    public function getTypeOccupationLogement(): string;

    /**
     * Retourne l'âge du logement
     * @return int
     */
    public function getAgeLogement(): int;

}
