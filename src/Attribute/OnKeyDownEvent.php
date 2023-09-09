<?php

declare(strict_types=1);

namespace Bic\Keyboard\Attribute;

use Bic\Keyboard\Event\KeyDownEvent;
use Bic\Keyboard\KeyInterface;

/**
 * @template-extends OnKeyEvent<KeyDownEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnKeyDownEvent extends OnKeyEvent
{
    public function __construct(?KeyInterface $key = null)
    {
        parent::__construct(KeyDownEvent::class, $key);
    }
}
