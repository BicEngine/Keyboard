<?php

declare(strict_types=1);

namespace Bic\Keyboard;

/**
 * @psalm-import-type KeyID from KeyInterface
 * @phpstan-import-type KeyID from KeyInterface
 */
final class UserKey implements KeyInterface
{
    /**
     * @var array<KeyID, KeyInterface>
     */
    private static array $instances = [];

    /**
     * @param KeyID $id
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
     * @param KeyID $id
     *
     * @psalm-suppress all
     */
    public static function create(int $id): KeyInterface
    {
        return self::$instances[$id] ??= new self($id);
    }
}
