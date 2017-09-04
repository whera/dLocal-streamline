<?php

namespace WSW\dLocal\Aggregators;

use JMS\Serializer\Annotation;

/**
 * Class AbstractAggregate
 *
 * @Annotation\AccessType("public_method")
 * @package WSW\dLocal\Aggregators
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class AbstractAggregate
{
    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_login")
     */
    private $login;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_trans_key")
     */
    private $transKey;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_return")
     */
    private $returnUrl;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("x_confirmation")
     */
    private $confirmationUrl;

    /**
     * @var string
     * @Annotation\Type("string")
     * @Annotation\SerializedName("control")
     */
    private $control;

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     *
     * @return $this
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationUrl()
    {
        return $this->confirmationUrl;
    }

    /**
     * @param string $confirmationUrl
     *
     * @return $this
     */
    public function setConfirmationUrl($confirmationUrl)
    {
        $this->confirmationUrl = $confirmationUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransKey()
    {
        return $this->transKey;
    }

    /**
     * @param string $transKey
     *
     * @return $this
     */
    public function setTransKey($transKey)
    {
        $this->transKey = $transKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * @param string $control
     *
     * @return $this
     */
    public function setControl($control)
    {
        $this->control = $control;

        return $this;
    }
}
