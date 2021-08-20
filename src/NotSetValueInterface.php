<?php
declare(strict_types=1);

namespace Szemul\NotSetValue;

use JsonSerializable;

interface NotSetValueInterface extends JsonSerializable
{
    public function __toString(): string;
}
