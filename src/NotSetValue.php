<?php
declare(strict_types=1);

namespace Szemul\NotSetValue;

use JsonSerializable;

class NotSetValue implements JsonSerializable
{
    public function jsonSerialize()
    {
        return null;
    }

    public function __toString()
    {
        return '';
    }
}
