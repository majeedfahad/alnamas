<?php

namespace App\Http\Controllers;

use App\Http\Requests\BestImageRequest;
use App\Models\BestImage;
use Illuminate\Http\Request;

class BestImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (config('app.is_trip_ends')) {
            return redirect()->route('gallery');
        }
        $images = BestImage::query()->today()->get();

        return view('best-images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('best-images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BestImageRequest $request)
    {
        $request->validated();

        BestImage::create();

        return redirect()->route('best-images.index');
    }

    public function destroy(BestImage $best_image)
    {
        $this->authorize('delete', $best_image);

        $best_image->delete();

        return back();
    }

    public function toggleLike(BestImage $image)
    {
        $image->like(auth()->user());

        return back();
    }

    public function vote(BestImage $image)
    {
        $this->authorize('vote', $image);

        $image->vote(auth()->user());

        return back();
    }

    public function unvote(BestImage $image)
    {
        $this->authorize('unvote', $image);

        $image->vote(auth()->user());

        return back();
    }
}
