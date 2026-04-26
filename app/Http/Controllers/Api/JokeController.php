<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Joke;


class JokeController extends Controller
{

    public function random()
    {
        $joke = Joke::inRandomOrder()->first();

        return response()->json([
            'data' => $joke
        ]);
}
}
