<?php

namespace c3037\Otus\FirstWeek\Library\ValidationPair;

final class ValidationPair implements ValidationPairInterface
{
    /**
     * @var string
     */
    private $openSymbol;

    /**
     * @var string
     */
    private $closeSymbol;

    /**
     * @param string $openSymbol
     * @param string $closeSymbol
     */
    public function __construct(string $openSymbol, string $closeSymbol)
    {
        \assert(mb_strlen($openSymbol) === 1, sprintf("Open symbol '%s' is invalid", $openSymbol));
        \assert(mb_strlen($closeSymbol) === 1, sprintf("Close symbol '%s' is invalid", $openSymbol));
        \assert($openSymbol !== $closeSymbol, 'Open and close symbols should be different');

        $this->openSymbol = $openSymbol;
        $this->closeSymbol = $closeSymbol;
    }

    /**
     * {@inheritdoc}
     */
    public function getOpenSymbol(): string
    {
        return $this->openSymbol;
    }

    /**
     * {@inheritdoc}
     */
    public function getCloseSymbol(): string
    {
        return $this->closeSymbol;
    }
}
