<?php

declare(strict_types=1);

namespace AndreyYurchuk\PasswordGenerator;

class PasswordGenerator
{
    private const DEFAULT_LENGTH = 16;
    private const DEFAULT_CHARS  = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';

    private int $length;
    private string $chars;

    public function __construct(?int $length = null, ?string $chars = null)
    {
        $this->length = $length ?? self::DEFAULT_LENGTH;
        $this->chars  = $chars  ?? self::DEFAULT_CHARS;
    }

    public function generate(): string
    {
        $result   = '';
        $maxIndex = strlen($this->chars) - 1;

        for ($i = 0; $i < $this->length; $i++) {
            $result .= $this->chars[random_int(0, $maxIndex)];
        }

        return $result;
    }
}