<?php

declare(strict_types=1);

namespace Bic\Keyboard\Event;

use Bic\Keyboard\KeyInterface;
use Bic\Keyboard\Modifier;

/**
 * @template TContext of object
 */
abstract class KeyEvent
{
    /**
     * @param TContext $target
     * @psalm-param int-mask-of<Modifier::*>|Modifier::* $modifiers
     */
    public function __construct(
        public readonly object $target,
        public readonly KeyInterface $key,
        public readonly int $modifiers = Modifier::NONE,
    ) {
    }
}
