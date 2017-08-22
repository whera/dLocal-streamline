<?php

namespace WSW\dLocal\Environments;

/**
 * Class AbstractEnvironment
 *
 * @package WSW\dLocal\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class AbstractEnvironment
{
    /**
     * @param string $host
     *
     * @return bool
     */
    public static function isValid($host)
    {
        return in_array($host, [Production::WS_HOST, Sandbox::WS_HOST]);
    }

    /**
     * @param string $resource
     *
     * @return string
     */
    public function getWsUrl($resource)
    {
        return 'https://' . $this->getWsHost() . $resource;
    }

    /**
     * @return string
     */
    abstract public function getWsHost();
}
