<?php

namespace c3037\Otus\FirstWeek\Library\ValidationPair;

final class ValidationPairContainer implements ValidationPairContainerInterface
{
    /**
     * @var string[]
     */
    private $pairs = [];

    /**
     * {@inheritdoc}
     */
    public function add(ValidationPairInterface ...$validationPairs): ValidationPairContainerInterface
    {
        foreach ($validationPairs as $validationPair) {
            $this->pairs[$validationPair->getOpenSymbol()] = $validationPair->getCloseSymbol();
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isOpenSymbol(string $symbol): bool
    {
        return array_key_exists($symbol, $this->pairs);
    }

    /**
     * {@inheritdoc}
     */
    public function isCloseSymbol(string $symbol): bool
    {
        return \in_array($symbol, $this->pairs, true);
    }

    /**
     * {@inheritdoc}
     */
    public function getCloseByOpenSymbol(string $openSymbol): ?string
    {
        return $this->pairs[$openSymbol] ?? null;
    }
}
