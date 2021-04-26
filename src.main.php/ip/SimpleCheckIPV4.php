<?php

namespace tanchengjin\utils\ip;

class SimpleCheckIPV4
{
    private $startIpAddress;
    private $endIpAddress;

    /**
     * SimpleCheckIp constructor.
     * @param $startIpAddress
     * @param $endIpAddress
     */
    public function __construct($startIpAddress, $endIpAddress)
    {
        $this->startIpAddress = $startIpAddress;
        $this->endIpAddress = $endIpAddress;
    }

    /**
     * 检查ip是否在某个网段中
     * @return boolean
     * @author TanChengjin
     * @email  18865477815@163.com
     */
    public function isAllow($ip)
    {
        $start_ip = $this->IPV4ConvertToLong($this->startIpAddress);
        $end_ip = $this->IPV4ConvertToLong($this->endIpAddress);
        $ip = $this->IPV4ConvertToLong($ip);
        return ($ip >= $start_ip) && ($ip <= $end_ip);
    }

    /**
     * 将ip地址转换为long
     * @param $ip
     * @return float|int
     * @author TanChengjin
     * @email  18865477815@163.com
     */
    protected function IPV4ConvertToLong($ip)
    {
        // ip2long — 将一个IPV4的字符串互联网协议转换成数字格式。

        //为防止ip过大出现负数使用bindec,decbin
        return bindec(decbin(ip2long($ip)));
    }


}