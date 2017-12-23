<?php

namespace c3037\Otus\FirstWeek\Library\OpenedSymbols;

final class OpenedSymbolStackFactory implements OpenedSymbolStackFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function spawn(): OpenedSymbolStackInterface
    {
        return new OpenedSymbolStack();
    }
}
