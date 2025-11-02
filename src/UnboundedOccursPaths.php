<?php

declare(strict_types=1);

namespace PhpCfdi\CfdiToJson;

final readonly class UnboundedOccursPaths
{
    /** @var array<string, int|string> */
    private array $paths;

    public function __construct(string ...$paths)
    {
        $this->paths = array_flip($paths);
    }

    public function match(string $path): bool
    {
        return array_key_exists($path, $this->paths);
    }
}
