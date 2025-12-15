<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        $vacancies = Vacancy::with('type', 'skills')
            ->orderBy('expires_at', 'asc')
            ->get();

        return view('home.index', compact('vacancies'));
    }
}
