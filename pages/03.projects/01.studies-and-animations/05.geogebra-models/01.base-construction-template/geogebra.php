<?php

$xml=simplexml_load_file("base/geogebra.xml") or die("Error: Cannot create object");

foreach($xml->construction->element as $element) {
  echo " " .  $element['label'] . " : " . $element['type']. "\n";

}
