<?php

namespace App\Http\Transformers;

use Illuminate\Http\Client\Response;

class ServicesTransformer
{

    public function transform(Response $response)
    {
        $data = json_decode($response);

        $services = [];


    }
}
