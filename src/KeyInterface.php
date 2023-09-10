<?php

declare(strict_types=1);

namespace Bic\Keyboard;

/**
 * @psalm-type KeyID = int<0, max>
 * @phpstan-type KeyID int<0, max>
 */
interface KeyInterface
{
    /**
     * @return KeyID
     */
    public function getCode(): int;
}
