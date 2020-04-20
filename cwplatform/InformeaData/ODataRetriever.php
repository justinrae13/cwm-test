<?php

namespace CWPlatform\InformeaData;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class ODataRetriever 
{
    public function __construct($query_uri) 
    {
        $this->query_uri = $query_uri;
        $this->response = null;
    }

    public function retrieveData()
    {
        try {
            $client = new Client([
                'timeout'   => 10.0,
                'headers' => [
                    'Accept' => 'application/atom+xml'
                ]
            ]);
            
            $response = $client->request('GET', $this->query_uri);
        } catch (RequestException $e) {
            // echo Psr7\str($e->getRequest());

            if ($e->hasResponse()) {
                throw new \Exception(Psr7\str($e->getResponse()));
            }
        }

        $this->response = $response;

        return $this;
    }

    public function getResponseBody()
    {
        try {
            if (!is_null($this->response)) {
                $body = $this->response->getBody();
            } else {
                $body = "<blank></blank>";    
            }
        } catch (\Throwable $e) {
            $body = "<blank></blank>";
        }

        return $body;
    }
}