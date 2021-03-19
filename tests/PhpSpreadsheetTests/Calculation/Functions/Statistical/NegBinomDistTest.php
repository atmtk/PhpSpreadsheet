<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Statistical;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical;
use PHPUnit\Framework\TestCase;

class NegBinomDistTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerNEGBINOMDIST
     *
     * @param mixed $expectedResult
     */
    public function testNEGBINOMDIST($expectedResult, ...$args): void
    {
        $result = Statistical::NEGBINOMDIST(...$args);
        self::assertEqualsWithDelta($expectedResult, $result, 1E-12);
    }

    public function providerNEGBINOMDIST()
    {
        return require 'tests/data/Calculation/Statistical/NEGBINOMDIST.php';
    }
}
