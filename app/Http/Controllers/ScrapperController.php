<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScrapperController extends Controller
{
    // function to scrap web data
    public function scrapper()
    {
        $all_data = [];
        $client = new Client();
        $url = 'https://medex.com.bd/companies';
        $crawler = $client->request('GET', $url);

        // $crawler->filter('.data-row-top')->each(function ($node)
        // {
        //     dump($node->text());
        // });

        for ($i=1; $i < 7; $i++) { 
            $url = 'https://medex.com.bd/companies?page=' . $i;
            $crawler = $client->request('GET', $url);

            $crawler->filter('.data-row-top')->each(function ($node)
            {
                dump($node->text());
                // array_push($all_data, $node->text());
            });
        }

        // return view
        // return json_encode($all_data);
        // return view('scrapper', compact('all_data'));
    }
}
