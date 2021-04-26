<?php


namespace tanchengjin\utils;


class FileUtil
{
    /**
     * 构建日期格式的存储路径
     * @return string
     * @author TanChengjin
     * @email  18865477815@163.com
     */
    public static function generateDatePath()
    {
        $dateFilePath = date('Y' . DIRECTORY_SEPARATOR . 'm' . DIRECTORY_SEPARATOR . 'd');
        return DIRECTORY_SEPARATOR . $dateFilePath . DIRECTORY_SEPARATOR;
    }

    /**
     * 判断字符串的前缀
     * @param $target
     * @param $haystack
     * @return bool
     * @author TanChengjin
     * @email  18865477815@163.com
     */
    public static function checkPrefix($target, $haystack)
    {
        $p = substr($target, 0, strlen($haystack));
        return $haystack == $p;
    }

    /**
     * 字符串开头是否有http
     * @param $target
     * @return bool
     * @author TanChengjin
     * @email  18865477815@163.com
     */
    public static function isHttp($target)
    {
        return self::checkPrefix($target, 'http');
    }
}