<?php

declare(strict_types=1);

namespace Bic\Keyboard\Attribute;

use Bic\Contracts\Event\OnEvent;
use Bic\Keyboard\Event\KeyEvent;

/**
 * @template TEvent of KeyEvent
 *
 * @template-extends OnEvent<TEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnKeyEvent extends OnEvent
{
    /**
     * @param class-string<TEvent> $event
     */
    public function __construct(string $event = KeyEvent::class)
    {
        parent::__construct($event);
    }
}
