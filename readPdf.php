<?php
include 'vendor/autoload.php';

$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile('pdf/test2.pdf');

$pages = $pdf->getPages();

function testFonts($fonts) {
  foreach ($fonts as $key => $font) {
    echo  "Key: " . $key
        ." Font: " . $font->getName()
        . " Type: " . $font->getType()
        . " Details: ";
    echo $font->getContent();
    echo "\n";
  }
}

function testTextRelationToFont($page) {

}

foreach ($pages as $page) {
  // var_dump($page->getDocument());
  echo $page->getUniqueId();
    // echo $page->getText();
    // $fonts = $page->getFonts();
    // var_dump($page->getDetails());
    // var_dump($fonts);
}
?>
