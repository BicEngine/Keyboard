<?php

declare(strict_types=1);

namespace Bic\Keyboard;

interface KeyInterface
{
    /**
     * @return int<0, max>
     */
    public function getCode(): int;
}
