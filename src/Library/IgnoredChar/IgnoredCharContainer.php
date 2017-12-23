<?php

namespace c3037\Otus\FirstWeek\Library\IgnoredChar;

final class IgnoredCharContainer implements IgnoredCharContainerInterface
{
    /**
     * @var int[]
     */
    private $chars;

    /**
     * {@inheritdoc}
     */
    public function add(IgnoredCharInterface ...$ignoredChars): IgnoredCharContainerInterface
    {
        foreach ($ignoredChars as $ignoredChar) {
            $this->chars[$ignoredChar->getChar()] = 1;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function exist(string $symbol): bool
    {
        return array_key_exists($symbol, $this->chars);
    }
}
