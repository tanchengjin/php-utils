<?php


namespace tanchengjin\utils\ip;


use function Couchbase\defaultDecoder;

class CheckIPV4 extends SimpleCheckIPV4
{
    private $ipNetwork = [
        ['192.168.1.1', '192.168.1.255'],
        ['192.168.2.1', '192.168.2.255'],
        ['192.168.3.1', '192.168.3.255'],
    ];

    /**
     * CheckIPV4 constructor.
     */
    public function __construct(array $ipNetwork = [])
    {
        if (null != $ipNetwork) $this->ipNetwork = $ipNetwork;
    }

    public function isAllow($ip)
    {
        $res = false;
        $ip = $this->IPV4ConvertToLong($ip);
        foreach ($this->ipNetwork as $ipArr) {
            $first = $this->IPV4ConvertToLong($ipArr[0]);
            $last = $this->IPV4ConvertToLong($ipArr[1]);
            if ($ip >= $first && $ip <= $last) {
                $res = true;
            }
        }
        return $res;
    }


}