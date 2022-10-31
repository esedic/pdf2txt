<?php

require __DIR__ . '/vendor/autoload.php';

// Parse PDF file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile('sample.pdf');

$text = $pdf->getText();
var_dump($text);