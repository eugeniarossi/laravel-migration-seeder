<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use DateTime;

class PageController extends Controller
{
    public function index() {
        // trains to depart
        $trains = Train::where('departure_time', '>', now()) -> get();
        return view('home', compact('trains'));
    }
}