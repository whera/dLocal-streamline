<?php

namespace WSW\dLocal;

use WSW\dLocal\Environments\AbstractEnvironment;
use WSW\dLocal\Environments\Production;
use WSW\dLocal\Environments\Sandbox;

/**
 * Class CredentialsTest
 *
 * @package WSW\dLocal
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CredentialsTest extends TestCase
{
    /**
     * @var AbstractEnvironment
     */
    private $environment;

    protected function setUp()
    {
        $this->environment = $this->getMockForAbstractClass(AbstractEnvironment::class);
        $this->environment->expects($this->any())
                          ->method('getWsHost')
                          ->willReturn('ws.test.com');
    }

    public function testConstructShouldConfigureTheAttributes()
    {
        $credentials = new Credentials('0a9s8d0as9', '9sl4jg7o44', 'a9sjrltyousmdfçfk@!#$&%', $this->environment);
        $this->assertAttributeEquals('0a9s8d0as9', 'login', $credentials);
        $this->assertAttributeEquals('9sl4jg7o44', 'transKey', $credentials);
        $this->assertAttributeEquals('a9sjrltyousmdfçfk@!#$&%', 'secretKey', $credentials);
        $this->assertAttributeSame($this->environment, 'environment', $credentials);
    }

    public function testConstructShouldUseProductionAsDefaultEnvironment()
    {
        $credentials = new Credentials('login', 'transKey', 'secretKey');
        $this->assertAttributeInstanceOf(Production::class, 'environment', $credentials);
    }

    public function testConstructShouldUseSandboxAsEnvironment()
    {
        $credentials = new Credentials('login', 'transKey', 'secretKey', new Sandbox);
        $this->assertAttributeInstanceOf(Sandbox::class, 'environment', $credentials);
    }

    public function testMethodsGet()
    {
        $credentials = new Credentials('login', 'transKey', 'secretKey');
        $this->assertEquals('login', $credentials->getLogin());
        $this->assertEquals('transKey', $credentials->getTransKey());
        $this->assertEquals('secretKey', $credentials->getSecretKey());
        $this->assertInstanceOf(Production::class, $credentials->getEnvironment());
    }

    public function testGetWsUrlShouldGetTheWsUrlFromTheEnvironment()
    {
        $credentials = new Credentials('login', 'transKey', 'secretKey', $this->environment);

        $this->assertEquals('https://ws.test.com/test', $credentials->getWsUrl('/test'));
        $this->assertEquals('https://ws.test.com/test?page=1', $credentials->getWsUrl('/test', ['page' => '1']));
    }
}
