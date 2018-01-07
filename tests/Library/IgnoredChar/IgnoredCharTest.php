<?php

namespace c3037\Otus\FirstWeek\Library\IgnoredChar;

use PHPUnit\Framework\TestCase;

final class IgnoredCharTest extends TestCase
{
    private const IGNORED_CHAR = 'A';

    /**
     * @test
     */
    public function getChar()
    {
        $ignoredChar = $this->createIgnoredChar();

        $actualIgnoredChar = $ignoredChar->getChar();

        self::assertEquals(self::IGNORED_CHAR, $actualIgnoredChar);
    }

    /**
     * @return IgnoredCharInterface
     */
    private function createIgnoredChar(): IgnoredCharInterface
    {
        return new IgnoredChar(self::IGNORED_CHAR);
    }
}
