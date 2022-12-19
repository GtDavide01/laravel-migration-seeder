<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all()->where('arrival_time', '2022-12-19 16:09:31');
        return view('home', compact('trains'));
    }
}
