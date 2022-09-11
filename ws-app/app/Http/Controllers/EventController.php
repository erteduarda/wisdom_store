<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function produto() {
        $busca = request('search');
        return view('product', ['busca' => $busca]);
    }

    public function create() {
        return view('events.create');
    }
}
