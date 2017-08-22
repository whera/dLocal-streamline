<?php

namespace WSW\dLocal\Environments;

use WSW\dLocal\TestCase;

class AbstractEnvironmentTest extends TestCase
{
    /**
     * @var \WSW\dLocal\Environments\AbstractEnvironment
     */
    private $environment;


    protected function setUp()
    {
        $this->environment = $this->getMockForAbstractClass(AbstractEnvironment::class);

        $this->environment->expects($this->any())
                          ->method('getWsHost')
                          ->willReturn('ws.test.com');
    }


    public function testIsValidShouldReturnTrueWhenHostIsProduction()
    {
        $this->assertTrue(AbstractEnvironment::isValid(Production::WS_HOST));
    }

    /**
     * @test
     */
    public function testIsValidShouldReturnFalseWhenHostIsSandbox()
    {
        $this->assertTrue(AbstractEnvironment::isValid(Sandbox::WS_HOST));
    }

    /**
     * @test
     */
    public function testIsValidShouldReturnFalseWhenHostNotProductionOrSandbox()
    {
        $this->assertFalse(AbstractEnvironment::isValid('example.org'));
    }

    /**
     * @test
     */
    public function testGetWsUrlShouldAppendProtocolAndWsHostToResource()
    {
        $this->assertEquals('https://ws.test.com/test', $this->environment->getWsUrl('/test'));
    }
}
