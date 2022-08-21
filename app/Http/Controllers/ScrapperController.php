<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;

class ScrapperController extends Controller
{
    // function to scrap web data
    public function scrapper()
    {
        $all_data = [];
        $url = 'https://medex.com.bd/brands';
        $crawler = Goutte::request('GET', $url);

        // dump($crawler);

        $crawler->filter('.row')->each(function ($node)
        {
            dump($node->text());
        });

        // return view
        // return $all_data;
        // return view('scrapper', compact('all_data'));
    }
}
