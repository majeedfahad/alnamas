<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStepsRequest;
use App\Models\Steps;
use Illuminate\Http\Request;

class StepsController extends Controller
{
    public function index(Request $request)
    {
        $approvedSteps = Steps::query()->today()->approved()->get()->sortByDesc('count');
        $pendingSteps = Steps::query()->today()->pending()->get()->sortByDesc('count');
        $rejectedSteps = Steps::query()->today()->rejected()->get()->sortByDesc('count');

        $steps = $approvedSteps->merge($pendingSteps)->merge($rejectedSteps)
            ->values(); // reset keys

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
