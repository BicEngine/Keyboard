<?php

declare(strict_types=1);

namespace Bic\Keyboard\Attribute;

use Bic\Contracts\Event\MatcherInterface;
use Bic\Contracts\Event\OnEvent;
use Bic\Keyboard\Event\KeyEvent;
use Bic\Keyboard\KeyInterface;

/**
 * @template TEvent of KeyEvent
 *
 * @template-extends OnEvent<TEvent>
 * @template-implements MatcherInterface<TEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnKeyEvent extends OnEvent implements MatcherInterface
{
    /**
     * @param class-string<TEvent> $event
     */
    public function __construct(
        string $event = KeyEvent::class,
        public readonly ?KeyInterface $key = null,
    ) {
        parent::__construct($event);
    }

    public function match(object $event): bool
    {
        return $this->key === null || $event->key === $this->key;
    }
}
