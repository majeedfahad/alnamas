<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStepsRequest;
use App\Models\Steps;
use Illuminate\Http\Request;

class StepsController extends Controller
{
    public function index(Request $request)
    {
        $steps = Steps::query()->today()->paginate(3);

        return view('steps.index', compact('steps'));
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

    public function approve(Steps $step)
    {
        $this->authorize('approve', $step);

        $step->approve();

        return redirect()->route('steps.index')->with('success', 'Steps approved');
    }
}
