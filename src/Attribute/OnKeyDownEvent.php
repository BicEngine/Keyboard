<?php

declare(strict_types=1);

namespace Bic\Keyboard\Attribute;

use Bic\Keyboard\Event\KeyDownEvent;

/**
 * @template-extends OnKeyEvent<KeyDownEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnKeyDownEvent extends OnKeyEvent
{
    public function __construct()
    {
        parent::__construct(KeyDownEvent::class);
    }
}
