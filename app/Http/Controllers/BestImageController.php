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
        $images = BestImage::query()->today()->paginate(3);

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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function toggleLike(BestImage $image)
    {
        $image->like(auth()->user());

        return back();
    }
}
