<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataScrapingController extends Controller
{
    public function index()
    {
        $data = json_decode(file_get_contents('output.json'));

        return view('data-scraping', compact('data'));
    }
}
