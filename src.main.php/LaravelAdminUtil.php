<?php

namespace tanchengjin\utils;

class LaravelAdminUtil
{
    public static function getSwitchState($off = '关闭', $on = '开启', $onColor = 'success', $offColor = 'danger', $onValue = 1, $offValue = 0)
    {
        return [
            'on' => ['value' => $onValue, 'text' => $on, 'color' => $onColor],
            'off' => ['value' => $offValue, 'text' => $off, 'color' => $offColor],
        ];
    }
}