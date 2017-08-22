<?php

namespace WSW\dLocal;

use WSW\dLocal\Environments\AbstractEnvironment;
use WSW\dLocal\Environments\Production;

/**
 * Class Credentials
 *
 * @package WSW\dLocal
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Credentials
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $transKey;

    /**
     * @var string
     */
    private $secretKey;

    /**
     * @var AbstractEnvironment
     */
    private $environment;

    /**
     * @param string $login
     * @param string $transKey
     * @param string $secretKey
     * @param AbstractEnvironment $environment
     */
    public function __construct($login, $transKey, $secretKey, AbstractEnvironment $environment = null)
    {
        $this->login = $login;
        $this->transKey = $transKey;
        $this->secretKey = $secretKey;
        $this->environment = $environment ?: new Production();
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getTransKey()
    {
        return $this->transKey;
    }

    /**
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @return AbstractEnvironment
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param string $resource
     * @param array $params
     *
     * @return string
     */
    public function getWsUrl($resource, array $params = [])
    {
        if (empty($params)) {
            return $this->environment->getWsUrl($resource);
        }

        return sprintf('%s?%s', $this->environment->getWsUrl($resource), http_build_query($params));
    }
}
