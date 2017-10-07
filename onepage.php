<?php
/** 
 * @Author JKol
 * @Date 2017-10-7 13:22 GMT+10
 */

/** 
 * Show variable.
 * 
 * @param mix $var This variable will be showed.
 */
if (!function_exists('dd')) {
    function dd($var)
    {
        var_dump($var);
        exit();
    }
}