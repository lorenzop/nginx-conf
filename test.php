<?php



require('src/Parser.php');



$parser = new \NginxConfig\Parser(__DIR__.'xLemp.conf');

$parser->parse();

