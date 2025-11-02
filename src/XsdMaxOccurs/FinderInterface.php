<?php

declare(strict_types=1);

namespace PhpCfdi\CfdiToJson\XsdMaxOccurs;

interface FinderInterface
{
    /**
     * @return string[]
     */
    public function obtainPathsFromXsdContents(string $xsdContents): array;
}
