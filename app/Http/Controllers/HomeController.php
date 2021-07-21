<?php


namespace App\Http\Controllers;


use App\Models\Apartment;

class HomeController extends Controller
{
    public function index()
    {
        return view('home' ,['list' => Apartment::paginate(6)]);
    }
}
