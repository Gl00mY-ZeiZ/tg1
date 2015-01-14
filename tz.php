<?php
$a = "<tt>some</tt><b>html</b>";
preg_match("/<\w?>(\w*?)<\/\w?>/",$a,$b);

var_dump($b[1]);