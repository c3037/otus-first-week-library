<?php

namespace c3037\Otus\FirstWeek\Library\ValidationPair;

interface ValidationPairContainerInterface
{
    /**
     * @param ValidationPairInterface[] $validationPairs
     * @return ValidationPairContainerInterface
     */
    public function add(ValidationPairInterface ...$validationPairs): ValidationPairContainerInterface;

    /**
     * @param string $symbol
     * @return bool
     */
    public function isOpenSymbol(string $symbol): bool;

    /**
     * @param string $symbol
     * @return bool
     */
    public function isCloseSymbol(string $symbol): bool;

    /**
     * @param string $openSymbol
     * @return null|string
     */
    public function getCloseByOpenSymbol(string $openSymbol): ?string;
}
