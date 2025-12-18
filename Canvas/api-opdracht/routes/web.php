<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Integrations\Flights\FlightsConnector;
use App\Http\Integrations\Flights\Requests\AllFlightsRequest;

// Haalt alle vluchten op vanuit externe API
Route::get('/', function () {
    // $flights = Http::withHeaders([
    //     'Accept' => 'application/json',
    //     'Content-Type' => 'application/json',
    // ])->get('http://localhost:8000/api/flights');

    // return $flights->json();

    $connector = new FlightsConnector;
    $response = $connector->send(new AllFlightsRequest(2));

    return $response->json();
});


