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
     * @param mix $var This variable will be showed.
     */
    static function dd($var)
    {
        var_dump($var);
        exit();
    }

    /**
     * 返回两个字符串不同部分，从字符串第一个字符开始比较
     * Reference：http://php.net/manual/zh/function.strstr.php
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

        return substr($str1, $start + strlen($str2));
    }

    /** 
     * 输出信息。
     * 
     * @param string $msg This variable will be printed.
     * 
     * @return boolean If true, print success else print fail.
     */
    static function message($msg = '')
    {
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
     * 字符串过滤器
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
}