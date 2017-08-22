<?php

namespace WSW\dLocal\Environments;

/**
 * Class Production
 *
 * @package WSW\dLocal\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Production extends AbstractEnvironment
{
    /**
     * @var string
     */
    const WS_HOST = 'api.dlocal.com';

    /**
     * @return string
     */
    public function getWsHost()
    {
        return static::WS_HOST;
    }
}
