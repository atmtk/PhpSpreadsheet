<?php

use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

return [
    [1, -1.5, -1.5],
    [0, -0.75, -1.5],
    [0, 0, -1.5],
    [0, 0.75, -1.5],
    [0, 1.5, -1.5],
    [0, -1.5, -0.75],
    [1, -0.75, -0.75],
    [0, 0, -0.75],
    [0, 0.75, -0.75],
    [0, 1.5, -0.75],
    [0, -1.5, 0],
    [0, -0.75, 0],
    [1, 0, 0],
    [0, 0.75, 0],
    [0, 1.5, 0],
    [0, -1.5, 0.75],
    [0, -0.75, 0.75],
    [0, 0, 0.75],
    [1, 0.75, 0.75],
    [0, 1.5, 0.75],
    [0, -1.5, 1.5],
    [0, -0.75, 1.5],
    [0, 0, 1.5],
    [0, 0.75, 1.5],
    [1, 1.5, 1.5],
    [0, -0.75],
    [1, 0],
    [0, 0.75],
    [ExcelError::VALUE(), 1, true],
    [ExcelError::VALUE(), true, 1],
    [ExcelError::VALUE(), 1, 'ABC'],
    [ExcelError::VALUE(), 'ABC', 1],
];