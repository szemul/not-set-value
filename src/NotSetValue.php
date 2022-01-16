<?php
declare(strict_types=1);

namespace Szemul\NotSetValue;

class NotSetValue implements NotSetValueInterface
{
    public function jsonSerialize(): mixed
    {
        return null;
    }

    public function __toString(): string
    {
        return '';
    }
}
