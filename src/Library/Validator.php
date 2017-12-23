<?php

namespace c3037\Otus\FirstWeek\Library;

use c3037\Otus\FirstWeek\Library\IgnoreChar\IgnoredCharContainerInterface;
use c3037\Otus\FirstWeek\Library\OpenedSymbols\OpenedSymbolStackFactoryInterface;
use c3037\Otus\FirstWeek\Library\OpenedSymbols\OpenedSymbolStackInterface;
use c3037\Otus\FirstWeek\Library\ValidationPair\ValidationPairContainer;
use InvalidArgumentException;

final class Validator implements ValidatorInterface
{
    /**
     * @var IgnoredCharContainerInterface
     */
    private $ignoredChars;

    /**
     * @var ValidationPairContainer
     */
    private $validationPairs;

    /**
     * @var OpenedSymbolStackFactoryInterface
     */
    private $openedSymbolStackFactory;

    /**
     * @param IgnoredCharContainerInterface $ignoredChars
     * @param ValidationPairContainer $validationPairs
     * @param OpenedSymbolStackFactoryInterface $openedSymbolStackFactory
     */
    public function __construct(
        IgnoredCharContainerInterface $ignoredChars,
        ValidationPairContainer $validationPairs,
        OpenedSymbolStackFactoryInterface $openedSymbolStackFactory
    ) {
        $this->ignoredChars = $ignoredChars;
        $this->validationPairs = $validationPairs;
        $this->openedSymbolStackFactory = $openedSymbolStackFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(string $string): bool
    {
        $openedSymbolStack = $this->openedSymbolStackFactory->spawn();

        for ($i = 0, $iMax = mb_strlen($string); $i < $iMax; $i++) {
            $currentSymbol = mb_substr($string, $i, 1);

            if (!$this->isAllowedSymbol($currentSymbol)) {
                throw new InvalidArgumentException('Validatable string contains not allowed chars');
            }
            $this->checkOpenCloseSequenceOnStack($openedSymbolStack, $currentSymbol);
        }

        if ($openedSymbolStack->isEmpty()) {
            return true;
        }

        return false;
    }

    /**
     * @param string $symbol
     * @return bool
     */
    private function isAllowedSymbol(string $symbol): bool
    {
        return
            (
                $this->ignoredChars->exist($symbol)
                || $this->validationPairs->isOpenSymbol($symbol)
                || $this->validationPairs->isCloseSymbol($symbol)
            );
    }

    /**
     * @param OpenedSymbolStackInterface $stack
     * @param string $symbol
     */
    private function checkOpenCloseSequenceOnStack(OpenedSymbolStackInterface $stack, string $symbol): void
    {
        if ($this->validationPairs->isOpenSymbol($symbol)) {
            $stack->add($symbol);
        } elseif ($this->validationPairs->isCloseSymbol($symbol)) {
            if ($symbol === $this->validationPairs->getCloseByOpenSymbol($stack->current())) {
                $stack->deleteLast();
            } else {
                $stack->markAsReadOnly();
            }
        }
    }
}