<?php

namespace App\Http\Integrations\Flights\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class AllFlightsRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/flights';
    }

    
}
