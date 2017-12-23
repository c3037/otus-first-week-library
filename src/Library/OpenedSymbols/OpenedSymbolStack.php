<?php

namespace c3037\Otus\FirstWeek\Library\OpenedSymbols;

use SplStack;

final class OpenedSymbolStack implements OpenedSymbolStackInterface
{
    /**
     * @var SplStack
     */
    private $stack;

    public function __construct()
    {
        $this->stack = new SplStack();
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
    public function add(?string $item): void
    {
        $this->stack->push($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getLast(): ?string
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->stack->top();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteLast(): void
    {
        if (!$this->isEmpty()) {
            $this->stack->pop();
        }
    }
}
