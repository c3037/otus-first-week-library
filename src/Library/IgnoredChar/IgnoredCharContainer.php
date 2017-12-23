<?php

namespace c3037\Otus\FirstWeek\Library\IgnoreChar;

final class IgnoredCharContainer implements IgnoredCharContainerInterface
{
    /**
     * @var int[]
     */
    private $chars;

    /**
     * {@inheritdoc}
     */
    public function add(IgnoredCharInterface $ignoredChar): void
    {
        $this->chars[$ignoredChar->getChar()] = 1;
    }

    /**
     * {@inheritdoc}
     */
    public function exist(string $symbol): bool
    {
        return array_key_exists($symbol, $this->chars);
    }
}
