<?php

namespace c3037\Otus\FirstWeek\Library\IgnoreChar;

interface IgnoredCharContainerInterface
{
    /**
     * @param IgnoredCharInterface $ignoredChar
     * @return void
     */
    public function add(IgnoredCharInterface $ignoredChar): void;

    /**
     * @param string $symbol
     * @return bool
     */
    public function exist(string $symbol): bool;
}
