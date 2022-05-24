<?php

declare(strict_types=1);

namespace Whoa\Tests\OAuthClient\Package\Azure\Version2\Azure\Version2;

use Whoa\Tests\OAuthClient\Data\Azure\Version2\OAuthClientSettings;
use Whoa\Tests\OAuthClient\TestCase;

/**
 * @package Whoa\Tests\OAuthClient
 */
class AzureSettingsTest extends TestCase
{
    /**
     * Test settings could be instantiated
     * @return void
     */
    public function testGetSettings()
    {
        $appConfig = [];
        $this->assertNotEmpty((new OAuthClientSettings())->get($appConfig));
    }
}
