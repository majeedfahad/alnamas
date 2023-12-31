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
        if(config('app.is_trip_ends')) {
            return redirect()->route('end');
        }

        $image = BestImage::bestOfYesterday();

        $steps = Steps::query()->yesterday()->approved()->get()->sortByDesc('count')->take(3)->values();

        return view('home', compact('image', 'steps'));
    }

    public function tripEnd()
    {
        if(! config('app.is_trip_ends')) {
            return redirect()->route('home');
        }

        $image = BestImage\Interaction::mostLovedImage();

        $steps = Steps::allStepsOrdered();

        return view('trip-ends', compact('image', 'steps'));
    }

    public function gallery()
    {
        $images = BestImage::query()->paginate(15);

        return view('gallery.index', compact('images'));
    }
}
