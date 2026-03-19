<?php

declare(strict_types=1);

namespace Valres\emojis\utils;

class ChatParser {
    public static function parse(string $message): string{
        return strtr($message, EmojisMap::MAP);
    }
}