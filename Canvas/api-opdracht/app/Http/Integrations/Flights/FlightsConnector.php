<?php

namespace App\Http\Integrations\Flights;

use Saloon\Http\Connector;

class FlightsConnector extends Connector
{
    public function resolveBaseUrl(): string
    {
        return 'https://localhost:8000/api';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }
}