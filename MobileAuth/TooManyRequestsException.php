<?php
/**
 *
 */

namespace waylaidwanderer\SteamCommunity\MobileAuth;

/**
 * Class TooManyRequestsException
 * @package waylaidwanderer\SteamCommunity\MobileAuth
 */
class TooManyRequestsException extends \Exception
{
    protected $message = 'You\'ve made too many requests recently. Please wait and try your request again later.';
}
