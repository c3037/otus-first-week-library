<?php

namespace c3037\Otus\FirstWeek\Library\IgnoredChar;

final class IgnoredChar implements IgnoredCharInterface
{
    /**
     * @var string
     */
    private $char;

    /**
     * @param string $char
     */
    public function __construct(string $char)
    {
        \assert(mb_strlen($char) === 1, sprintf("Char '%s' is invalid", $char));

        $this->char = $char;
    }

    /**
     * {@inheritdoc}
     */
    public function getChar(): string
    {
        return $this->char;
    }
}
