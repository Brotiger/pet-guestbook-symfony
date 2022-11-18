<?php

namespace App\Tests\Controller;

use Symfony\Component\Panther\PantherTestCase;

class PantherConferenceControllerTest extends PantherTestCase
{
    public function testSomething(): void
    {
        $client = static::createPantherClient();
        $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
    }
}
