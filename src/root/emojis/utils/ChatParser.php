<?php

declare(strict_types=1);

namespace root\emojis\utils;

class ChatParser {
    public static function parse(string $message): string{
        return strtr($message, EmojisMap::MAP);
    }
}