<?php
include 'vendor/autoload.php';

$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile('pdf/test.pdf');

echo $pdf->getText();

$pages = $pdf->getPages();

$pageCount = 1;
foreach ($pages as $page) {
  if ($pageCount === 7) {
    echo $page->getText();
    break;
  }
  $pageCount++;
}
?>
