<?php

declare(strict_types=1);

namespace PhpCfdi\CfdiToJson\Nodes;

final readonly class Node
{
    /** @param array<string, string> $attributes */
    public function __construct(
        private string $key,
        private string $path,
        private array $attributes,
        private Children $children,
        private string $value = ''
    ) {
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @return array<string, string|array>
     * @phpstan-ignore-next-line
     */
    public function toArray(): array
    {
        $textArray = ('' !== $this->getValue()) ? ['' => $this->getValue()] : [];
        /** @phpstan-ignore-next-line return.type */
        return $textArray + $this->attributes + $this->children->toArray();
    }
}
