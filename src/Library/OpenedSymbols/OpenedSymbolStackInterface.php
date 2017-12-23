<?php

namespace c3037\Otus\FirstWeek\Library\OpenedSymbols;

interface OpenedSymbolStackInterface
{
    /**
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @param null|string $item
     * @return void
     */
    public function add(?string $item): void;

    /**
     * @return null|string
     */
    public function getLast(): ?string;

    /**
     * @return void
     */
    public function deleteLast(): void;
}
