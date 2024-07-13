<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $header_list = [
            "characters",
            "comics",
            "movies",
            "tv",
            "games",
            "collectibles",
            "videos",
            "fans",
            "news",
            "shop"
        ];

        $footer_lists = [
            [
                "Dc Comics",
                "Characters",
                "Comics",
                "Movies",
                "Tv",
                "Games",
                "Videos",
                "News"
            ],
            [
                "DC",
                "Terms Of Use",
                "Privacy policy (new)",
                "AD Choices",
                "Advertising",
                "Jobs",
                "Subscriptions",
                "Talent Workshops",
                "CPSC Certificates",
                "Ratings",
                "Shop Help",
                "Contact Us"
            ],
            [
                "Sites",
                "DC",
                "MAD Magazine",
                "DC Kids",
                "DC Universe",
                "DC Power Visa"
            ],
            [
                "Shop",
                "Shop DC",
                "Shop DC Collectibles",
            ]
        ];

        return view('welcome', compact('header_list', 'footer_lists'));
    }
}
