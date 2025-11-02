<?php

declare(strict_types=1);

namespace PhpCfdi\CfdiToJson\Nodes;

final class Node
{
    private string $key;

    private string $path;

    private Children $children;

    /** @var array<string, string> */
    private array $attributes;

    private string $value;

    /**
     * @param array<string, string> $attributes
     */
    public function __construct(string $key, string $path, array $attributes, Children $children, string $value = '')
    {
        $this->key = $key;
        $this->path = $path;
        $this->attributes = $attributes;
        $this->children = $children;
        $this->value = $value;
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
