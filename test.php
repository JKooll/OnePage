<?php 
require_once "vendor/autoload.php";

use jkol\o;

/**
 * dd()
 * expect file\path\to\onepage.php:17:string 'Hello World' (length=11)
 */
o::dd('Hello World');