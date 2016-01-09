<?php namespace GroundworkPHP\Tests;

use GroundworkPHP\App;
use GroundworkPHP\Http\Router;
use GroundworkPHP\Tests\TestCase;
use \Mockery as mockery;
use GroundworkPHP\Contracts\Application;

/**
 * Class AppTest
 *
 * Tests for main application code
 *
 * @package GroundworkPHP\Tests
 * @author Jason Michels <michelsja@gmail.com>
 * @version $Id$
 */
class AppTest extends TestCase
{
    /**
     * Test the app returns the correct contract
     */
    public function testAppReturnsCorrectInstance()
    {
        $requestUri = "/";
        $requestMethod = "GET";
        $router = mockery::mock(Router::class);

        $app = new App($requestUri, $requestMethod, $router);

        $this->assertInstanceOf(Application::class, $app);
    }
}
