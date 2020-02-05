# Éco-prêt à taux zéro

## Introduction

La classe EcoPTZ retourne toutes les informations relatives à l'éco-prêt à taux zéro

## Description

Aide financière pour la rénovation énergétique - Éco-prêt à taux zéro.

## Constantes

**EcoPTZ::NOM**
Le nom de l'aide financière

**EcoPTZ::DESCRIPTION**
Une description de l'aide financière

**EcoPTZ::DELAI**
Délai de versement de l'aide financière

**EcoPTZ::DISTRIBUTEUR**
Distributeur de l'aide financière

**EcoPTZ::REFERENCES**
Références légales ou institutionnelles de l'aide financière

**EcoPTZ::CONDITIONS**
Conditions d'accès de l'aide financière

## Méthodes

```
EcoPTZ::get(DataInterface $model): ?float;
```
Retourne le montant calculé de l'aide financière sur la base des informations transmises

```
EcoPTZ::getBareme(DataInterface $model): ?array;
```
Retourne les barêmes en vigueur pour l'ouvrage transmis

```
EcoPTZ::getPlafond(): int;
```
Retourne le plafond de l'aide financière

```
EcoPTZ::resolveConditions(ConditionInterface $model): array;
```
Retourne les conditions d'accès à l'aide et, pour chacune, si la condition est satisfaite sur la base des 
informations transmises

```
EcoPTZ::isEligible(ConditionInterface $model): bool;
```
Retourne l'éligibilité du projet à l'aide financière sur la base des informations transmises

## Exemples

```
<?php

use AideTravaux\EcoPTZ\Model\DataInterface;
use AideTravaux\EcoPTZ\Model\ConditionInterface;
use AideTravaux\EcoPTZ\EcoPTZ;

class Data implements DataInterface, ConditionInterface
{
    public function getEcoPTZCodeTravaux(): string
    {
        return 'EPTZ-01';
    }

    public function getEptzTypeProjet(): string
    {
        return 'Bouquet de 2 travaux';
    }

    public function getCoutTTC(): float
    {
        return (float) 12000;
    }

    public function getTypeLogement(): string
    {
        return 'Maison individuelle';
    }

    public function getStatutOccupantLogement(): string
    {
        return 'Propriétaire occupant';
    }

    public function getTypeOccupationLogement(): string
    {
        return 'Résidence principale';
    }

    public function getAgeLogement(): int
    {
        return 30;
    }
}

$data = new Data();

EcoPTZ::get($data);
EcoPTZ::resolveConditions($data);

```

## Base de données

| Code | Travaux |
| ---- | ------- |
| EPTZ-01 | Isolation des planchers de combles perdus |
| EPTZ-02 | Isolation des rampants de toiture et plafonds de combles |
| EPTZ-03 | Isolation des rampants de toiture et plafonds de combles |
| EPTZ-04 | Isolation des murs donnant sur l'extérieur |
| EPTZ-05 | Isolation des planchers bas sur sous-sol, vide sanitaire ou passage ouvert |
| EPTZ-06 | Pose de fenêtres ou portes-fenêtres |
| EPTZ-07 | Pose de fenêtres en toitures |
| EPTZ-08 | Pose d'une seconde fenêtre à double vitrage renforcé devant une fenêtre existante |
| EPTZ-09 | Installation d'une chaudière gaz à très haute performance énergétique avec programmateur de chauffage |
| EPTZ-10 | Installation d'une chaudière micro-cogénération gaz avec programmateur de chauffage |
| EPTZ-11 | Installation d'une PAC air/eau avec programmateur de chauffage |
| EPTZ-12 | Installation d'une PAC géothermique à capteur fluide frigorigène, de type eau glycolée/eau ou de type eau/eau avec programmateur de chauffage |
| EPTZ-13 | Installation d'équipements de raccordement à un réseau de chaleur |
| EPTZ-14 | Installation d'une chaudière bois |
| EPTZ-15 | Installation d'un poêle à bois, foyer fermé, insert de cheminée intérieure ou cuisinière |
| EPTZ-16 | Installation d'équipement de chauffage fonctionnant à l'énergie hydraulique ou à l'énergie solaire |
| EPTZ-17 | Installation de capteurs solaires pour la production d'ECS ou les produits mixtes (ECS et chauffage) |
| EPTZ-18 | Installation d'une PAC dédiée à la production d'eau chaude sanitaire |
| EPTZ-19 | Installation d'équipement de fourniture d'eau chaude sanitaire fonctionnant à l'énergie hydraulique |

## Sources

- [Article 244 quater U du code général des impôts](https://www.legifrance.gouv.fr/affichCodeArticle.do;jsessionid=F384DBA1923D5C97C47DFDC2B95447D2.tplgfr36s_3?idArticle=LEGIARTI000041466825&cidTexte=LEGITEXT000006069577&categorieLien=id&dateTexte=)

- [Article R319-1 du code de la construction et de l'habitation](https://www.legifrance.gouv.fr/affichCodeArticle.do?idArticle=LEGIARTI000031824090&cidTexte=LEGITEXT000006074096&dateTexte=20160101)

- [Arrêté du 30 mars 2009 relatif aux conditions d'application de dispositions concernant les avances remboursables sans intérêt destinées au financement de travaux de rénovation afin d'améliorer la performance énergétique des logements anciens](https://www.legifrance.gouv.fr/affichTexte.do?cidTexte=JORFTEXT000020459597)