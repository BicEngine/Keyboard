<?php

declare(strict_types=1);

namespace Bic\Keyboard\Attribute;

use Bic\Keyboard\Event\KeyUpEvent;
use Bic\Keyboard\KeyInterface;

/**
 * @template-extends OnKeyEvent<KeyUpEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnKeyUpEvent extends OnKeyEvent
{
    public function __construct(?KeyInterface $key = null)
    {
        parent::__construct(KeyUpEvent::class, $key);
    }
}
