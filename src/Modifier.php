<?php

declare(strict_types=1);

namespace Bic\Keyboard;

interface Modifier
{
    public const NONE        = 0x00;

    public const NUM_LOCK    = 0x01;

    public const SHIFT       = 0x02;

    public const CONTROL     = 0x04;

    public const ALT         = 0x08;

    public const SUPER       = 0x10;

    public const CAPS_LOCK   = 0x20;

    public const MODE        = 0x40;

    public const SCROLL_LOCK = 0x80;
}
