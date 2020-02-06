<?php

namespace AideTravaux\EcoPTZ\Database;

/**
 * @see https://www.legifrance.gouv.fr/affichCodeArticle.do;jsessionid=F384DBA1923D5C97C47DFDC2B95447D2.tplgfr36s_3?idArticle=LEGIARTI000041466825&cidTexte=LEGITEXT000006069577&categorieLien=id&dateTexte=
 */
interface DatabaseInterface
{
    /**
     * @return array
     */
    public static function toArray(): array;
}
