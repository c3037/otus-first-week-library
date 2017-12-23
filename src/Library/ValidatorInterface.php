<?php

namespace c3037\Otus\FirstWeek\Library;

use InvalidArgumentException;

interface ValidatorInterface
{
    /**
     * @param string $string
     * @throws InvalidArgumentException
     * @return bool
     */
    public function validate(string $string): bool;
}
