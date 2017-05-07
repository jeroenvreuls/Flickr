<?php

class ApiTest extends TestCase
{
    public $flickr;

    public function __construct()
    {
        $api = new JeroenG\Flickr\Api($_ENV['FLICKR_KEY']);
        $this->flickr = new JeroenG\Flickr\Flickr($api);
    }

    public function testEcho()
    {
        $test = $this->flickr->echoThis('helloworld');

        $this->assertEquals('ok', $test->stat);
    }
}
