<?php


namespace tanchengjin\utils;


class ResponseUtil
{
    private static $instance;

    /**
     * ResponseUtil constructor.
     */
    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new ResponseUtil();
        }
        return self::$instance;
    }

    private function handler($errno, $message, array $data = [])
    {
        return [
            'errno' => $errno,
            'message' => $message,
            'data' => $data
        ];
    }

    public function responseWithSuccess($message = 'success', $data = [])
    {
        return ResponseUtil::$instance->handler($message, $data, 0);
    }

    public function responseWithFailure($errno = 1, $message = 'fail', $data = [])
    {
        return ResponseUtil::$instance->handler($errno, $message, $data);
    }


}