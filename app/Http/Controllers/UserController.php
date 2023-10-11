<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Pagination\LengthAwarePaginator;
use JsonException;

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
            $data = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            $users = $data['users'] ?? [];
            $perPage = 10;
            $page = request()->input('page', 1);
            $users = collect($users)->sortBy('name');

            // Aplicar a paginação aos dados
            $users = new LengthAwarePaginator(
                $users->forPage($page, $perPage),
                $users->count(),
                $perPage,
                $page
            );
        } catch (JsonException $e) {
            $users = [];
        }

        return view('pages.home', compact('users'));
    }

}
