<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KanyeQuoteController extends Controller
{
    // protected $apiUrl = 'https://api.kanye.rest/';

    // protected function getRandomQuotes($count = 5)
    // {
    //     $response = Http::withoutVerifying()->get($this->apiUrl . 'quotes', [
    //         'count' => $count,
    //     ]);

    //     return $response->body(); // Return JSON string
    // }

    public function index()
    {
       // Read the contents of the quotes.json file
        $jsonString = file_get_contents(storage_path('app/quotes.json'));

        // Decode the JSON data into a PHP array
        $quotes = json_decode($jsonString);

        // Get 5 random keys from the array
        $randomKeys = array_rand($quotes, 5);

        // Initialize an empty array to store the randomly selected quotes
        $randomQuotes = [];

        // Retrieve the quotes corresponding to the random keys
        foreach ($randomKeys as $key) {
            $randomQuotes[] = $quotes[$key];
        }

        // dd($randomQuotes);
        return view('KayneQuote', compact('randomQuotes'));
    }

}
