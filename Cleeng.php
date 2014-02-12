<?php

namespace Hirviid\Bundle\CleengBundle;

/**
 * Wrapper for the Cleeng_API.
 *
 * @author David Van Gompel <david@truecolor.be>
 */
class Cleeng 
{
    /**
     * @var \Cleeng_Api
     */
    public $api;

    /**
     * @param \Cleeng_Api $api
     * @param bool $isSandbox
     * @param string $publisherToken
     */
    public function __construct(\Cleeng_Api $api, $isSandbox = false, $publisherToken = null)
    {
        $this->api = $api;

        if (true === $isSandbox) {
            $this->api->enableSandbox();
        }
        if (null !== $publisherToken) {
            $this->api->setPublisherToken($publisherToken);
        }
    }
}