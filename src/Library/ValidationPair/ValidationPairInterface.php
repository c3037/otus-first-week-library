<?php

namespace c3037\Otus\FirstWeek\Library\ValidationPair;

interface ValidationPairInterface
{
    /**
     * @return string
     */
    public function getOpenSymbol(): string;

    /**
     * @return string
     */
    public function getCloseSymbol(): string;
}
