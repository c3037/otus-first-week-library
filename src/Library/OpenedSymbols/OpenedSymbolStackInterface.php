<?php

namespace c3037\Otus\FirstWeek\Library\OpenedSymbols;

interface OpenedSymbolStackInterface
{
    /**
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * @return null|string
     */
    public function current(): ?string;

    /**
     * @param string $item
     * @return void
     */
    public function add(string $item): void;

    /**
     * @return void
     */
    public function deleteLast(): void;

    /**
     * @return void
     */
    public function markAsReadOnly(): void;
}
