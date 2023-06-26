<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStepsRequest;
use Illuminate\Http\Request;

class StepsController extends Controller
{
    public function index()
    {
        return view('steps.index');
    }

    public function create()
    {
        return view('steps.create');
    }

    public function store(StoreStepsRequest $request)
    {
        $data = $request->validated();

        auth()->user()->steps()->create($data);

        return redirect()->route('steps.index');
    }
}
