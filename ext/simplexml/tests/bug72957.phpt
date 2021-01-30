--TEST--
Bug #72957: Null coalescing operator doesn't behave as expected with SimpleXMLElement
--SKIPIF--
<?php if (!extension_loaded("simplexml")) print "skip simplexml extension is not loaded"; ?>
--FILE--
<?php

$xml = new SimpleXMLElement('<root><elem>Text</elem></root>');

echo 'elem2 is: ' . ($xml->elem2 ?? 'backup string') . "\n";
echo 'elem2 is: ' . (isset($xml->elem2) ? $xml->elem2 : 'backup string') . "\n";

?>
--EXPECT--
elem2 is: backup string
elem2 is: backup string
