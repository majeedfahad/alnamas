<?php

namespace App\Http\Controllers;

use App\Models\BestImage;
use App\Models\Event;
use App\Models\Steps;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::all();

        $image = BestImage::bestOfYesterday();

        $steps = Steps::query()->yesterday()->approved()->get()->sortByDesc('count')->values();

        return view('home', compact('events', 'image', 'steps'));
    }
}
