<?php

declare(strict_types=1);

namespace PhpCfdi\CfdiToJson\Tests\Functional;

use PhpCfdi\CfdiToJson\JsonConverter;
use PhpCfdi\CfdiToJson\Tests\TestCase;

class DetallistaTest extends TestCase
{
    public function testComplementoDetallista(): void
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        $this->assertJsonStringEqualsJsonString(
            $this->fileContents('detallista-example.json'),
            JsonConverter::convertToJson($this->fileContents('detallista-example.xml')),
        );
    }
}
