<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalServices
{
    public function makeRequest($method, $requestUrl, $queryParams = [], $formParams = [], $headers = [], $isJsonRequest = false)
    {
        $client = new Client([
            'base_uri' => $this->baseUri,

        ]);

        // Comprobamos que existe el metodo
        if(method_exists($this,'resolveAuthorization')){
            $this->resolveAuthorization($queryParamas,$formParams,$headers);
        }

        $response = $client->request($method,$requestUrl,[
            $isJsonRequest ? 'json' : 'form_params'=>$formParams,
            'headers' =>$headers,
            'query'=>$queryParamas,
        ]);

        $response = $response->getBody()->getContents();

        // Comprobamos que existe el metodo
        if(method_exists($this,'decodeResponse')){
            $this->decodeResponse($response);
        }


        return $response;
    }
}
