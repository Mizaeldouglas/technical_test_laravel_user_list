<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * @throws GuzzleException
     */
    public function index()
    {
        $client = new Client();
        $response = $client->get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');

        try {
            $users = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            $users = ["error" => 'Error when decoding JSON: ' . $e->getMessage()];
        }

        $perPage = 10;

        return view('pages.home', compact('users'));
    }
}
