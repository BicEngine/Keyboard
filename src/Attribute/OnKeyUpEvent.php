<?php

declare(strict_types=1);

namespace Bic\Keyboard\Attribute;

use Bic\Keyboard\Event\KeyUpEvent;

/**
 * @template-extends OnKeyEvent<KeyUpEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnKeyUpEvent extends OnKeyEvent
{
    public function __construct()
    {
        parent::__construct(KeyUpEvent::class);
    }
}
