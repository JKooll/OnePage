<h1><p align="center">One Page</p></h1>

## About One Page
The is a PHP helper functions library.

## Usage
### dd($var)
```php
$var = 'Hello World!';
o::dd($var); //string(12) "Hello World!"
```
## strdiff($str1, $str2)

## message($msg = '')

## strtolowerplus($var)

## strfilter($str)

## helloWorld()

## cli_read($format, $first = false)

## cli_write($str)

## toString($var)

## swap($var1, $var2)

## splitNum($num)

## function_dump($funcname)
```php
function a() {}

class b 
{
    public function f() 
    {

    }
}

o::function_dump('a');

o::function_dump(array('b', 'f'));

$b = new b();
o::function_dump(array($b, 'f'));
```
