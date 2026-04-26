<?php

use App\Http\Controllers\Api\JokeController;
use Illuminate\Support\Facades\Route;
use App\Models\Joke;


Route::get('/', function () {
    return view('jokes');
});

Route::get('/api/jokes', function () {
    return response()->json([
        "jokes" => [
            "Gaji masuk: Alhamdulillah...",
            "Saving aku macam WiFi kampung...",
        ]
    ]);
});


Route::prefix('api')->group(function () {
   

Route::get('/jokes/random', function () {

    // ambil history dari session
    $used = session()->get('used_jokes', []);

    // query joke yang belum pernah keluar
    $query = Joke::query();

    if (count($used) > 0) {
        $query->whereNotIn('id', $used);
    }

    $joke = $query->inRandomOrder()->first();

    // kalau semua dah habis
    if (!$joke) {
        session()->forget('used_jokes');

        return response()->json([
            'message' => 'All jokes done, reset session'
        ]);
    }

    // simpan id dalam session
    $used[] = $joke->id;
    session()->put('used_jokes', $used);

    return response()->json([
        'data' => $joke,
        'used_count' => count($used)
    ]);
});
});

