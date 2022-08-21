<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScrapperController extends Controller
{
    // function to scrap web data
    public function scrapper()
    {
        $client = new Client();

        // $url = 'https://growtechbd.com/about-us';
        // $crawler = $client->request('GET', $url);
        // dump($crawler);

        for ($i=1; $i < 2; $i++) { 
            $url = 'https://growtechbd.com/about-us';
            $crawler = $client->request('GET', $url);
            // dump($crawler);

            $crawler->filter('.card')->each(function ($node)
            {
                dump($node->filter('h3')->text());
            });
        }

        // return view
        // return json_encode($all_data);
        // return view('scrapper', compact('all_data'));
    }
}
