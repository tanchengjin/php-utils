<?php


namespace tanchengjin\utils;


class ResponseUtil
{
    private static function handler($errno, $message, array $data = [])
    {
        return [
            'errno' => $errno,
            'message' => $message,
            'data' => $data
        ];
    }

    public static function responseWithSuccess($message = 'success', $data = [])
    {
        return self::handler(0, $message, $data);
    }

    public static function responseWithFailure($errno = 1, $message = 'fail', $data = [])
    {
        return self::handler($errno, $message, $data);
    }


}