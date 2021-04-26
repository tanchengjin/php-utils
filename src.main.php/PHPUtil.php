<?php


namespace tanchengjin\utils;


class PHPUtil
{
    /**
     * 判断值是否为真
     * @param $val
     * @param false $return_null
     * @return bool|mixed
     * @author TanChengjin
     * @email  18865477815@163.com
     */
    public static function isTrue($val, $return_null = false)
    {
        $boolval = (is_string($val) ? filter_var($val, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) : (bool)$val);
        return ($boolval === null && !$return_null ? false : $boolval);
    }
}