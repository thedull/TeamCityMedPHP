<?php

namespace ImageLocator;

class ImageLocator {

    private $_uri = "";
    private $_client = null;

    public function __construct($uri, $client) {
        $this->_uri = $uri;
        $this->_client = $client;
    }

    public function getResponse() {
        $req = $this->_client->createRequest('GET', $this->_uri);
        $res = $this->_client->send($req);
        return json_decode($res->getBody());
    }
}
