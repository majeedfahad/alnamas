<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStepsRequest;
use App\Models\Steps;
use Illuminate\Http\Request;

class StepsController extends Controller
{
    public function index(Request $request)
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

        Steps::create($data);

        return redirect()->route('steps.index');
    }
}
