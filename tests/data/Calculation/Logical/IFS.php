<?php

return [
    [
        '#N/A',
    ],
    [
        1,
        true,
        1,
    ],
    [
        '#N/A',
        false,
        1,
        true,
    ],
    [
        'ABC',
        true,
        'ABC',
    ],
    [
        '#N/A',
        false,
        false,
        false,
        1,
        false,
        'ABC',
    ],
    [
        'ABC',
        false,
        false,
        false,
        1,
        true,
        'ABC',
    ],
    [
        false,
        true,
        false,
        false,
        1,
        true,
        'ABC',
    ],
    'array return' => [
        [[4, 5, 6]],
        false,
        [[1, 2, 3]],
        true,
        [[4, 5, 6]],
    ],
];
