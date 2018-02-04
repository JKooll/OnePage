<?php 
require_once "vendor/autoload.php";

$result = o::swap('hello', 'world');
o::dd($result);