<?php

namespace Imglocator\Test;

require_once(__DIR__."/../vendor/autoload.php");
require_once(__DIR__."/../src/ImageLocator.php");

class MainTest extends \PHPUnit_Framework_TestCase {

    public function testGetResponse() {
        $instance = new \GuzzleHttp\Client();
        $imgLocator = new \ImageLocator\ImageLocator('http://ajax.googleapis.com/ajax/services/search/images?q=grumpy%20cat&v=1.0', $instance);
        $jsonRes = print_r($imgLocator->getResponse());
        $this->assertNotEmpty($jsonRes);
    }
}
