<?php

namespace c3037\Otus\FirstWeek\Library\IgnoreChar;

interface IgnoredCharContainerInterface
{
    /**
     * @param IgnoredCharInterface[] $ignoredChars
     * @return IgnoredCharContainerInterface
     */
    public function add(IgnoredCharInterface ...$ignoredChars): IgnoredCharContainerInterface;

    /**
     * @param string $symbol
     * @return bool
     */
    public function exist(string $symbol): bool;
}
