<?php

declare(strict_types=1);

namespace Bic\Keyboard;

final class UserKey implements KeyInterface
{
    /**
     * @var array<int<0, max>, self>
     */
    private static array $instances = [];

    /**
     * @param int<0, max> $id
     *
     * @internal Please use {@see UserKey::create()} instead.
     */
    private function __construct(
        private readonly int $id,
    ) {
    }

    public function getCode(): int
    {
        return $this->id;
    }

    /**
     * @param int<0, max> $id
     */
    public static function create(int $id): KeyInterface
    {
        return self::$instances[$id] ??= new self($id);
    }
}
