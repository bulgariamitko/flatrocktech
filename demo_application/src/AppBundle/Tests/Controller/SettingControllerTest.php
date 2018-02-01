<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SettingControllerTest extends WebTestCase
{
    public function testSetting()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/setting');
    }

}
