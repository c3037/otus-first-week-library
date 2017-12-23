<?php

namespace c3037\Otus\FirstWeek\Library\ValidationPair;

interface ValidationPairContainerInterface
{
    /**
     * @param ValidationPairInterface $validationPair
     */
    public function add(ValidationPairInterface $validationPair): void;

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
