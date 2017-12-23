<?php

namespace c3037\Otus\FirstWeek\Library\OpenedSymbols;

use SplStack;

final class OpenedSymbolStack implements OpenedSymbolStackInterface
{
    /**
     * @var SplStack
     */
    private $stack;

    /**
     * @var bool
     */
    private $isWritable;

    public function __construct()
    {
        $this->stack = new SplStack();
        $this->isWritable = true;
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty(): bool
    {
        return $this->stack->isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function current(): ?string
    {
        return $this->stack->current();
    }

    /**
     * {@inheritdoc}
     */
    public function add(string $item): void
    {
        if ($this->isWritable) {
            $this->stack->push($item);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteLast(): void
    {
        if ($this->isWritable) {
            $this->stack->pop();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function markAsReadOnly(): void
    {
        $this->isWritable = false;
    }
}
