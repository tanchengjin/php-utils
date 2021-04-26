<?php


namespace tanchengjin\utils;


class DateTimeUtil
{
    private static $week = [
        '周日', '周一', '周二', '周三', '周四', '周五', '周六',
    ];

    /**
     * 通过日期获取周几
     * @param $date
     * @param array $week
     * @return string
     * @author TanChengjin
     * @email  18865477815@163.com
     */
    public static function getWeekStringByDate($date, $week = [])
    {
        $res = '';
        if (self::isDateFormat($date)) {
            if (empty($week)) {
                $res = self::$week[date('w', strtotime($date))];
            } else {
                $res = $week[date('w', strtotime($date))];
            }
        }
        return $res;
    }

    public static function getWeekIntByDate($date)
    {
        $res = -1;
        if (self::isDateFormat($date)) {
            $res = date('w', strtotime($date));
        }
        return $res;
    }

    /**
     * 是否为正确的日期格式
     * @param $date
     * @return bool
     * @author TanChengjin
     * @email  18865477815@163.com
     */
    public static function isDateFormat($date)
    {
        return strtotime(date('Y-m-d', strtotime($date))) === strtotime($date);
    }

    /**
     * 判断上午还是下午
     * @param $time
     * @return string
     */
    public static function isAmOrPm($time)
    {
        list($hour, $minute, $second) = explode(':', $time);

        if ($hour >= 0 && $hour <= 12) {
            return 'am';
        } else {
            return 'pm';
        }
    }
}