<?php
/**
 * Created by PhpStorm.
 * User: Joel
 * Date: 2016-02-18
 * Time: 11:30 AM
 */

namespace waylaidwanderer\SteamCommunity;

/**
 * Interface CountRequestStorerInterface
 * @package waylaidwanderer\SteamCommunity
 */
interface CountRequestStorerInterface
{
    public function incrementCountRequest(SteamCommunity $steamCommunity, string $ip);

    public function getCountRequest(SteamCommunity $steamCommunity, string $ip);
}
