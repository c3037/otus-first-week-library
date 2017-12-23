<?php

namespace c3037\Otus\FirstWeek\Library\OpenedSymbols;

interface OpenedSymbolStackFactoryInterface
{
    /**
     * @return OpenedSymbolStackInterface
     */
    public function spawn(): OpenedSymbolStackInterface;
}
