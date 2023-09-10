<?php

declare(strict_types=1);

namespace Bic\Keyboard;

/**
 * @psalm-import-type KeyID from KeyInterface
 * @phpstan-import-type KeyID from KeyInterface
 */
enum Key: int implements KeyInterface
{
    case SPACE         = 1;
    case APOSTROPHE    = 2;
    case COMMA         = 3;
    case MINUS         = 4;
    case PERIOD        = 5;
    case SLASH         = 6;
    case KEY_0         = 7;
    case KEY_1         = 8;
    case KEY_2         = 9;
    case KEY_3         = 10;
    case KEY_4         = 11;
    case KEY_5         = 12;
    case KEY_6         = 13;
    case KEY_7         = 14;
    case KEY_8         = 15;
    case KEY_9         = 16;
    case SEMICOLON     = 17;
    case EQUAL         = 18;
    case A             = 19;
    case B             = 20;
    case C             = 21;
    case D             = 22;
    case E             = 23;
    case F             = 24;
    case G             = 25;
    case H             = 26;
    case I             = 27;
    case J             = 28;
    case K             = 29;
    case L             = 30;
    case M             = 31;
    case N             = 32;
    case O             = 33;
    case P             = 34;
    case Q             = 35;
    case R             = 36;
    case S             = 37;
    case T             = 38;
    case U             = 39;
    case V             = 40;
    case W             = 41;
    case X             = 42;
    case Y             = 43;
    case Z             = 44;
    case LEFT_BRACKET  = 45;
    case BACKSLASH     = 46;
    case RIGHT_BRACKET = 47;
    case GRAVE_ACCENT  = 48;
    case ESCAPE        = 49;
    case ENTER         = 50;
    case TAB           = 51;
    case BACKSPACE     = 52;
    case INSERT        = 53;
    case DELETE        = 54;
    case RIGHT         = 55;
    case LEFT          = 56;
    case DOWN          = 57;
    case UP            = 58;
    case PAGE_UP       = 59;
    case PAGE_DOWN     = 60;
    case HOME          = 61;
    case END           = 62;
    case CAPS_LOCK     = 63;
    case SCROLL_LOCK   = 64;
    case NUM_LOCK      = 65;
    case PRINT_SCREEN  = 66;
    case PAUSE         = 67;
    case F1            = 68;
    case F2            = 69;
    case F3            = 70;
    case F4            = 71;
    case F5            = 72;
    case F6            = 73;
    case F7            = 74;
    case F8            = 75;
    case F9            = 76;
    case F10           = 77;
    case F11           = 78;
    case F12           = 79;
    case F13           = 80;
    case F14           = 81;
    case F15           = 82;
    case KP_0          = 83;
    case KP_1          = 84;
    case KP_2          = 85;
    case KP_3          = 86;
    case KP_4          = 87;
    case KP_5          = 88;
    case KP_6          = 89;
    case KP_7          = 90;
    case KP_8          = 91;
    case KP_9          = 92;
    case KP_DECIMAL    = 93;
    case KP_DIVIDE     = 94;
    case KP_MULTIPLY   = 95;
    case KP_SUBTRACT   = 96;
    case KP_ADD        = 97;
    case KP_ENTER      = 98;
    case KP_EQUAL      = 99;
    case LEFT_SHIFT    = 100;
    case LEFT_CONTROL  = 101;
    case LEFT_ALT      = 102;
    case LEFT_SUPER    = 103;
    case RIGHT_SHIFT   = 104;
    case RIGHT_CONTROL = 105;
    case RIGHT_ALT     = 106;
    case RIGHT_SUPER   = 107;
    case MENU          = 108;

    public function getCode(): int
    {
        return $this->value;
    }

    /**
     * @param KeyID $id
     */
    public static function create(int $id): KeyInterface
    {
        return self::tryFrom($id) ?? UserKey::create($id);
    }
}
