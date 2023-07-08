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
        $image = BestImage::bestOfYesterday();

        $steps = Steps::query()->yesterday()->approved()->get()->sortByDesc('count')->take(3)->values();

        return view('home', compact('image', 'steps'));
    }

    public function tripEnd()
    {

        return view('trip-ends');
    }
}
