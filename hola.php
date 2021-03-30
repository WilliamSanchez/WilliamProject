<?php
// El nombre por defecto es mundo
$nombre = isset($argv[1]) ? $argv[1] : "mundo"
@print "Hola {$nombre}\n";
