<?php

use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

return [
    [ExcelError::NAN(), 1.5, -1],
    [ExcelError::VALUE(), 'NaN', 1],
    [ExcelError::VALUE(), 1.5, 'NaN'],
    [ExcelError::VALUE(), true, 1],
    [ExcelError::VALUE(), 1.5, true],
    [ExcelError::VALUE(), null, 1],
    [ExcelError::VALUE(), 1.5, null],
    [0.146884054700421, -12.5, 0],
    [-0.245935764451348, -10, 0],
    [0.266339657880379, -7.5, 0],
    [-0.380127739987264, -3.5, 0],
    [-0.048383776468198, -2.5, 0],
    [0.765197686557967, -1, 0],
    [0.996097563041985, -0.125, 0],
    [1.0, 0, 0],
    [0.996097563041985, 0.125, 0],
    [0.765197686557967, 1, 0],
    [-0.048383776468198, 2.5, 0],
    [-0.380127739987264, 3.5, 0],
    [0.171650807137554, 8, 0],
    [0.146884054700421, 12.5, 0],
    [-0.120651475704867, 22, 0],
    [0.138079009746556, 32, 0],
    [0.165483804614760, -12.5, 1],
    [-0.043472746168862, -10, 1],
    [-0.135248427579706, -7.5, 1],
    [-0.137377527362327, -3.5, 1],
    [-0.497094102464274, -2.5, 1],
    [-0.440050585744933, -1, 1],
    [-0.062378009134495, -0.125, 1],
    [0.0, 0, 1],
    [0.062378009134495, 0.125, 1],
    [0.440050585744933, 1, 1],
    [0.497094102464274, 2.5, 1],
    [0.137377527362327, 3.5, 1],
    [0.234636346853915, 8, 1],
    [-0.165483804614760, 12.5, 1],
    [0.117177789643852, 22, 1],
    [-0.026589028475905, 32, 1],
    [-0.173361463438783, -12.5, 2],
    [0.254630313685121, -10, 2],
    [-0.230273410525790, -7.5, 2],
    [0.458629184194308, -3.5, 2],
    [0.446059058439617, -2.5, 2],
    [0.114903484931900, -1, 2],
    [0.001950583109930, -0.125, 2],
    [0.0, 0, 2],
    [0.001950583109930, 0.125, 2],
    [0.114903484931900, 1, 2],
    [0.446059058439617, 2.5, 2],
    [0.458629184194308, 3.5, 2],
    [-0.112991720424075, 8, 2],
    [-0.173361463438783, 12.5, 2],
    [0.131304002036127, 22, 2],
    [-0.139740824026300, 32, 2],
    [-0.034737699762240, -12.5, 5],
    [0.234061528186794, -10, 5],
    [-0.283473905162551, -7.5, 5],
    [-0.080441986647992, -3.5, 5],
    [-0.019501625134503, -2.5, 5],
    [-0.000249757730211, -1, 5],
    [-0.000000007942113, -0.125, 5],
    [0.0, 0, 5],
    [0.000000007942113, 0.125, 5],
    [0.000249757730211, 1, 5],
    [0.019501625134503, 2.5, 5],
    [0.080441986647992, 3.5, 5],
    [0.185774772190564, 8, 5],
    [0.034737699762240, 12.5, 5],
    [0.036304102444491, 22, 5],
    [0.026241347352986, 32, 5],
    [-0.002563729994587, -0.5, 3.5],
    [-0.242268457674874, -0.5, 1.5],
    [0.938469807240813, -0.5, 0.5],
    [0.938469807240813, 0.5, 0.5],
    [0.242268457674874, 0.5, 1.5],
    [0.002563729994587, 0.5, 3.5],
    [0.063689476134356, 64, 8],
];
