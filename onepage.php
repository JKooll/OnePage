<?php
/** 
 * @Author JKol
 * @Date 2017-10-7 13:22 GMT+10
 */
namespace jkol;

class onepage
{
    /** 
     * Show variable.
     * 
     * <code>
     * onepage::dd('Hello World!');
     * </code>
     * @param mix $var This variable will be showed.
     */
    static function dd($var)
    {
        var_dump($var);
        exit();
    }

    /**
     * 返回两个字符串右侧不同部分，从字符串第一个字符开始比较
     * Reference：http://php.net/manual/zh/function.strstr.php
     * 
     * <code>
     * onepage::strdiff('abcd', 'ab'); //-> 'cd'
     * </code>
     * 
     * @param string $str1
     * @param string $str2
     * 
     * @return string
     */
    static function strdiff($str1, $str2)
    {
        if(strlen($str1) < strlen($str2)) {
            $strtmp = $str1;
            $str1 = $str2;
            $str2 = $strtmp;
        }

        $start = stripos($str1, $str2);

        $result_str = substr($str1, $start + strlen($str2));

        return $result_str ? $result_str : '';
    }

    /** 
     * 输出信息。
     * 
     * @param string $msg This variable will be printed.
     * 
     * @return boolean If true, print success else print fail.
     */
    static function message($msg)
    {
        $msg = empty($msg) ? '' : $msg;

        if(!is_string($msg)) {
            $msg = json_encode($msg);
        }

        echo $msg;

        return true;
    }

    /**
     * strtolower增强版
     * 
     * @param string|array|object $var This variable will be string to be lower.
     * 
     * @return mixed|string
     */
    static function strtolowerplus($var)
    {
        if(is_string($var)) {
            return strtolower($var);
        }

        //标明var类型
        $flag = false;

        if(is_array($var)) {
            $flag = true;
        }

        return json_decode( strtolower( json_encode($var) ), $flag);
    }

    /**
     * 空格转换成下划线
     * 
     * @param string $str
     * 
     * @return mixed|string
     */
    static function strfilter($str)
    {
        $str = str_replace(' ', '_', $str);

        $str = strip_tags($str);

        $str = htmlspecialchars($str);

        return $str;
    }

    /**
     * Echo Hello World!
     * 
     * @return void
     */
    static function helloWorld()
    {
        echo 'Hello World';
    }

    /**
     * Read a line from cli
     * 
     * @param string $format Line string format
     * @param boolean $first If true, just return first element, else return result array.
     * 
     * @return string|array
     */
    static function cli_read($format, $first = false)
    {
        $stdin = fopen('php://stdin', 'r');

        $result = fscanf($stdin, $format);

        if ($first) {
            return empty($result[0]) ? '' : $result[0];
        }

        return $result;
    }

    /**
     * write a string to cli
     * 
     * @param string $str The string will be write to cli
     * 
     * @return boolean 
     */
    static function cli_write($str)
    {
        if (gettype($str) != 'string') {
            return false;
        }

        $stdout = fopen('php://stdout', 'w');

        return fwrite($stdout, $str);
    }

    /**
     * conver $var type to string
     * 
     * @param string $var The variable type will be change to string
     * 
     * @return string
     */
    static function toString($var)
    {
        return print_r($var, true);
    }
}